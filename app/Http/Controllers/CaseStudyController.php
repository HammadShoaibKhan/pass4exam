<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Exam;
use App\Models\Question;
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
                $latestCaseStudyNameNo = (int) substr($exams[count($exams) - 1]->name, -1);
                $name = 'Case Study ' . ($latestCaseStudyNameNo  + 1);
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

    public function delete(Request $request)
    {
        CaseStudy::where('id', $request->case_study_id)->delete();
        $exam = Exam::find($request->exam_id);
        $examCaseStudies = $exam->caseStudies;
        if (count($examCaseStudies) > 0) {
            foreach ($examCaseStudies as $key => $caseStudy) {
                $name = "Case Study " . ($key + 1);
                CaseStudy::where('id', $caseStudy->id)->update(['name' => $name]);
            }
        }
        $exam->refresh();
        return view('admin.exams.partials.case-studies-listings', compact('exam'));
    }

}
