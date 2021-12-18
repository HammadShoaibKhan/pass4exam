<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\CaseStudy;
use App\Models\Exam;
use App\Models\Vendor;
use Illuminate\Http\Request;

class UserExamController extends Controller
{
    public function showUserPdfFiles()
    {
        $userExams = auth()->user()->exams;
        $userExams = $userExams->map(function ($item) {
            return Exam::where('id', $item->exam_id)->select('id', 'title')->first();
        })->filter();
        return view('customer.pdf', compact('userExams'));
    }

    public function showUserWebBasedExam()
    {
        $userExams = auth()->user()->exams;
        $userExams = $userExams->map(function ($item) {
            return Exam::where('id', $item->exam_id)->select('id', 'title', 'slug', 'vendor_id')->first();
        })->filter();
        return view('customer.web-based', compact('userExams'));
    }

    public function premiumExam($vendorSlug = null, $examSlug = null)
    {
        $exam = Exam::where('slug', $examSlug)->first();
        if ($exam != null) {
            if ( ( $vendorSlug != null && Vendor::where('slug', $vendorSlug)->exists() ) &&
                ( $examSlug != null && Exam::where('slug', $examSlug)->exists() ) && isUserOwnExam($exam->id) ) {
                $title = 'Online Practice Test';
                return view('premium_exam', compact('title','exam'));
            }
        }
        return redirect()->route('home');
    }

    public function startPremiumExamPractice(Request $request)
    {
        $userIP = $_SERVER['REMOTE_ADDR'];
        $userID = auth()->user()->id;
        $examID = $request->exam_id;
        $caseStudyIds = $request->case_studies;
        $questionRange = $request->QuestionNoRange;
        $passingRange = $request->PassRange;
        $hours = $request->hours;
        $minutes = $request->mins;
        $isTimerOn = $request->without_timer == 1 ? $request->without_timer : 0;
        $duration =  0;
        if ($isTimerOn == 0) {
            $convertHoursInMinutes = $hours * 60;
            $duration = $convertHoursInMinutes + $minutes;
        }
        $exam = Exam::find($examID);
        $attemptID = $exam->exam_code . uniqid() . date('hsi');
        $examType = $request->exam_type;
        $selectedQuestions = [];
        if (count($caseStudyIds) > 0) {
            /** loop on case studies ids to get the questions*/
            foreach ($caseStudyIds as $caseStudyId) {
                $questions = CaseStudy::find($caseStudyId)
                    ->questions
                    ->where('status', 1);
                if (count($questions) > 0) {
                    /** loop on questions of single case study*/
                    foreach ($questions as $question) {
                        $selectedQuestions[] = [
                            'question_id' => $question->id,
                            'question' => $question->question
                        ];
                    }
                }
            }
        }

        $selectedQuestions = array_slice($selectedQuestions, 0, $questionRange);

        $caseStudyIds = json_encode($caseStudyIds);
        $selectedQuestions = json_encode($selectedQuestions);

        $assessment = Assessment::create([
            'attempt_id' => $attemptID,
            'type' => $examType,
            'exam_id' => $examID,
            'case_studies_ids' => $caseStudyIds,
            'passing_range' => $passingRange,
            'question_range' => $questionRange,
            'selected_questions' => $selectedQuestions,
            'user_id' => $userIP,
            'user_id' => $userID,
            'is_timer_on' => $isTimerOn,
            'duration' => $duration
        ]);
        $title = 'Exam';
        return view('exam.start_exam', compact('title', 'assessment'));
    }

    public function examAttemptHistory($examID)
    {
        if ($examID != null && Exam::where('id', $examID)->exists()) {

            $title = "Exam Attempt history";
            $exam = Exam::where('id', $examID)->first();
            $examHistory = Assessment::where(['user_id' => auth()->user()->id, 'exam_id' => $examID])->get();
            return view('exam.attempt_history', compact('title', 'examHistory', 'exam'));
        }

    }
}
