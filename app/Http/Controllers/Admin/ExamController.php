<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Vendor;
use App\Models\Certification;
use App\Http\Requests\ExamRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;

class ExamController extends Controller
{
    public function index()
    {
        $title = "Exams";
        $exams = Exam::orderBy('id', 'DESC')->get();
        return view('admin.exams.index', compact('title', 'exams'));
    }

    public function create()
    {
        $title = "Exam";
        $vendors = Vendor::orderBy('title', 'ASC')->whereStatus(1)->select('id', 'title')->get();
        return view('admin.exams.create', compact('title', 'vendors'));
    }

    public function store(ExamRequest $request)
    {
        $slug = Str::slug($request->title);
        $examCode = strToUpper(Str::slug($request->exam_code));
        $request->request->add(['slug' => $slug, 'exam_code' => $examCode]);
        Exam::create($request->only('title', 'vendor_id', 'certification_id', 'exam_code', 'status', 'description', 'slug'));
        return back()->with('success', 'Exam Added Successfully');
    }

    public function checkNameExists(Request $request)
    {
        if (!empty($request->title)) {
            if (Exam::where('title', $request->title)->exists()) {
                return "false";
            }
            return "true";
        }
        return "true";
    }

    public function checkExamCodeExists(Request $request)
    {
        if (!empty($request->exam_code)) {
            if (Exam::where('exam_code', $request->exam_code)->exists()) {
                return "false";
            }
            return "true";
        }
        return "true";
    }

    public function edit($id = null)
    {
        if ($id != null && Exam::where('id', $id)->exists()) {
            $title = "Update Exam";
            $exam = Exam::find($id);
            $vendors = Vendor::orderBy('title', 'ASC')->whereStatus(1)->select('id', 'title')->get();
            $certifications = Certification::orderBy('title', 'ASC')->whereStatus(1)->select('id', 'title')->get();
            return view('admin.exams.edit', compact('title', 'exam', 'vendors', 'certifications'));
        }
        return redirect()->route('admin.exams');
    }

    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->title);
        $examCode = strToUpper(Str::slug($request->exam_code));
        $data = [
            'title' => $request->title,
            'vendor_id' => $request->vendor_id,
            'certification_id' => $request->certification_id,
            'exam_code' => $examCode,
            'slug' => $slug,
            'status' => $request->status,
            'description' => $request->description
        ];
        Exam::find($id)->update($data);
        return back()->with('success', 'Exam Updated Successfully');
    }

    public function delete(Request $request) 
    {
        Exam::find($request->exam_id)->delete();
        $exams = Exam::orderBY('id', 'DESC')->get();
        return view('admin.exams.partials.exam-listings', compact('exams'));

    }

    public function multipleDelete(Request $request)
    {
        Exam::whereIn('id', $request->exam_ids)->delete();
        $exams = Exam::orderBY('id', 'DESC')->get();
        return view('admin.exams.partials.exam-listings', compact('exams'));
    }

    public function changeStatus(Request $request)
    {
        Exam::whereIn('id', $request->exam_ids)->update(['status' => $request->status]);
        $exams = Exam::orderBY('id', 'DESC')->get();
        return view('admin.exams.partials.exam-listings', compact('exams'));
    }

    /**upload exam demo file */
    public function uploadDemoFile(Request $request)
    {
        $request->validate([
            'demo_file' => 'required|mimes:pdf'
        ], [
            'demo_file.required' => 'Select a demo file'
        ]);

        if ($request->hasFile('demo_file')) {
            $extension = $request->demo_file->extension();
            $fileName = removeSpacesAndLowerCase(uniqid() . '_' . $request->demo_file->getClientOriginalName());
            $request->demo_file->storeAS('demo_files/', $fileName, 'public');
            Media::create([
                'link_table' => 'exams',
                'link_id' => $request->exam_id,
                'link_type' => 'demo_file',
                'file_name' => $fileName
            ]);
            return back()->with('success', 'Demo file uploaded successfully.');
        }
        return back()->with('error', 'Something went wrong!');
    }

    public function deleteFile(Request $request, $id)
    {

        try {
            $file = Media::where([
                'link_table' => 'exams',
                'link_type' => 'demo_file',
                'link_id' => $id
            ])->first();

            if (Storage::delete('public/demo_files/'. $file->file_name)) {
                $file->delete();
            }
            
            return back()->with('success', 'File is removed successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
