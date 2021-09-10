<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function create($exam_id = null)
    {
        if ($exam_id != null) {
            $exams = CaseStudy::where('exam_id', $exam_id)->get();
            if (count($exams) == 0) {
                $name = 'Case Study 1';
            } else {
                $name = 'Case Study ' . (count($exams)  + 1);
            }
            CaseStudy::create(['name' => $name, 'exam_id' => $exam_id]);
            return back()->with('success', 'Case study created successfully');
        }
        return redirect()->route('admin.exams')->with('error', 'Something went wrong');
    }

    public function showQuestions($id = null)
    {
        if ($id != null && CaseStudy::where('id', $id)->exists()) {
            $title = 'Questions';
            $caseStudy = CaseStudy::find($id);
            return view('admin.questions.index', compact('title', 'caseStudy'));
        }
        return redirect()->route('admin.exams')->with('error', 'Something went wrong');
    }

}
