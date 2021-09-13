<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create($caseStudyID = null)
    {
        if ($caseStudyID != null && CaseStudy::where('id', $caseStudyID)->exists()) {
            $title = "Question";
            $caseStudy = CaseStudy::find($caseStudyID);
            return view('admin.questions.create', compact('title', 'caseStudy'));
        }
        return redirect()->route('admin.exams')->with('error', 'Something went wrong.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required'
        ], [ 'question.required' => 'Please enter a question']);
        $question = Question::create($request->only('question', 'case_study_id'));
        return redirect()->route('admin.question.edit', $question->id);
    }

    public function edit($id = null)
    {
        if ($id != null && Question::where('id', $id)->exists()) {
            $title = "Question";
            $question = Question::find($id);
            return view('admin.questions.edit', compact('title', 'question'));
        }
        return redirect()->route('admin.exams');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required'
        ], [ 'question.required' => 'Please enter a question']);
        Question::find($id)->update(['question' => $request->question]);
        return back()->with('success', 'Question updated successfully.');
    }

    public function saveAnswers(Request $request, $questionID)
    {
        $answers = [
            'answer_1' => $request->answer_1,
            'answer_2' => $request->answer_2,
            'answer_3' => $request->answer_3,
            'answer_4' => $request->answer_4
        ];

        $data = [];
        for ($i = 1; $i <= 4; $i++) {
            if ($request->true == 'answer_' . $i) {
                $data['answer_' . $i] = [
                    'text' => $answers['answer_' . $i],
                    'status' => 1
                ];
            } else {
                $data['answer_' . $i] = [
                    'text' => $answers['answer_' . $i],
                    'status' => 0
                ];
            }
        }
        $data = json_encode($data);
        Question::find($questionID)->update(['answer' => $data]);
        return back()->with('success', 'Answers save successfully.');
    }
}
