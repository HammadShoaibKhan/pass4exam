<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\Vendor;
use App\Http\Requests\CertificationRequest;
use Illuminate\Support\Str;

class CertificationController extends Controller
{
    public function index()
    {
        $title = "Certifications";
        $certifications = Certification::orderBy('id', 'DESC')->get();
        return view('admin.certifications.index', compact('title', 'certifications'));
    }

    public function create()
    {
        $title = "Certification";
        $vendors = Vendor::orderBy('title', 'ASC')->where('status', 1)->select('id', 'title')->get();
        return view('admin.certifications.create', compact('title', 'vendors'));
    }


    public function store(CertificationRequest $request)
    {
        $slug = Str::slug($request->title);
        $request->request->add(['slug' => $slug]);
        Certification::create($request->only('title', 'vender_id', 'status', 'description', 'slug'));
        return back()->with('success', 'Certification Added Successfully');
    }


    public function checkNameExists(Request $request)
    {
        if (!empty($request->title)) {
            if (Certification::where('title', $request->title)->exists()) {
                return "false";
            }
            return "true";
        }
        return "true";
    }

    public function edit($id = null) 
    {
        if ($id != null && Certification::where('id', $id)->exists()) {
            $title = "Update Certification";
            $certification = Certification::find($id);
            $vendors = Vendor::orderBy('title', 'ASC')->where('status', 1)->select('id', 'title')->get();
            return view('admin.certifications.edit', compact('title', 'vendors', 'certification'));
        }
        return redirect()->route('admin.certifications');
    }

    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->title);
        $data = [
            'title' => $request->title,
            'slug' => $slug,
            'vender_id' => $request->vender_id,
            'status' => $request->status,
            'description' => $request->description
        ];
        Certification::find($id)->update($data);
        return back()->with('success', 'Certification Updated Successfully');
    }

    public function delete(Request $request) 
    {
        Certification::find($request->certification_id)->delete();
        $certifications = Certification::orderBY('id', 'DESC')->get();
        return view('admin.certifications.partials.certification-listings', compact('certifications'));
    }

    public function multipleDelete(Request $request)
    {
        Certification::whereIn('id', $request->certification_ids)->delete();
        $certifications = certification::orderBY('id', 'DESC')->get();
        return view('admin.certifications.partials.certification-listings', compact('certifications'));
    }

    public function changeStatus(Request $request)
    {
        Certification::whereIn('id', $request->certification_ids)->update(['status' => $request->status]);
        $certifications = certification::orderBY('id', 'DESC')->get();
        return view('admin.certifications.partials.certification-listings', compact('certifications'));
    }
}
