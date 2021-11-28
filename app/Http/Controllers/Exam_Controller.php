<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\CaseStudy;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Exam;
use App\Models\Testimonial;
use App\Models\ContentManager;

class Exam_Controller extends Controller
{
    public function index($vendorSlug = null, $examSlug = null)
    {
        if ( ( $vendorSlug != null && Vendor::where('slug', $vendorSlug)->exists() ) &&
             ( $examSlug != null && Exam::where('slug', $examSlug)->exists() ) ) {
            $title = ucfirst($vendorSlug).' '.$examSlug.' - All You Need to Know';
            $exam = Exam::where('slug', $examSlug)->first();
            $pageContent = ContentManager::whereIn('type',['exam-info'])->get();
            // $testimonials = Testimonial::where('approved',1)->inRandomOrder()->limit(4)->get();
            return view('exam_info', compact('title','exam','pageContent'));
        }
        return redirect()->route('home');
    }

    public function examDetail($vendorSlug = null, $examSlug = null)
    {
        if ( ( $vendorSlug != null && Vendor::where('slug', $vendorSlug)->exists() ) &&
             ( $examSlug != null && Exam::where('slug', $examSlug)->exists() ) ) {
            $title = ucfirst($vendorSlug).' '.$examSlug.' Actual Questions Instant Download';
            $exam = Exam::where('slug', $examSlug)->first();
            $testimonials = Testimonial::where('approved',1)->inRandomOrder()->limit(4)->get();
            return view('exam_detail', compact('title','exam','testimonials'));
        }
        return redirect()->route('home');
    }

    public function examDemo($vendorSlug = null, $examSlug = null)
    {
        if ( ( $vendorSlug != null && Vendor::where('slug', $vendorSlug)->exists() ) &&
            ( $examSlug != null && Exam::where('slug', $examSlug)->exists() ) ) {
            $title = 'Online Practice Test';
            $exam = Exam::where('slug', $examSlug)->first();
            return view('exam_demo', compact('title','exam'));
        }
        return redirect()->route('home');
    }

    /** to start demo practice exam*/
    public function startDemoExamPractice(Request $request)
    {
        $userIP = $_SERVER['REMOTE_ADDR'];
        $userID = auth()->check() ? auth()->user()->id : null;
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
//        dd($examID, $caseStudy, $questionRange, $passingRange, $hours, $minutes, $withoutTimer);
        $exam = Exam::find($examID);
        $attemptID = $exam->exam_code . uniqid() . date('hsi');
        $examType = $request->exam_type;
        $selectedQuestions = [];
        if (count($caseStudyIds) > 0) {
            /** loop on case studies ids to get the questions*/
            foreach ($caseStudyIds as $caseStudyId) {
               $questions = CaseStudy::find($caseStudyId)
                   ->questions
                   ->where('demo_question', 1)
                   ->where('status', 1)
                   ->take($questionRange);
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

    /** save answers on next button click*/
    public function nextAction(Request $request)
    {
        $questionID = $request->question_id;
        $answer = $request->answer;
        $attemptID = $request->attempt_id;
        $markedQuestion = $request->marked_question;
        $assessment = Assessment::where('attempt_id', $attemptID)->first();
        $userSelectedAnswers = json_decode($assessment->user_selected_answers_with_questions, true);
        $initialAssessment = [];
        $correctAnswer = Question::getQuestionCorrectAnswer($questionID);

        if ($markedQuestion == 'true') {
            /** if question marked checked then both status and attempt status is 0 means skipped */
            $initialAssessment[] = [
                'question_id' => $questionID,
                'attempted_answer' => '',
                'status' => 0,
                'attempt_status' => 0
            ];
        } else {
            if ($answer != '') {
                /** store user selected answers wrong, correct and skip with status 0, 1, 2*/
                if ($correctAnswer == $answer) {
                    /** if answer is correct then status and attempt status is 1 */
                    $initialAssessment[] = [
                        'question_id' => $questionID,
                        'attempted_answer' => $answer,
                        'status' => 1,
                        'attempt_status' => 1
                    ];
                } else {
                    /** if answer is wrong and question attempted then status is 0 and attempt_status = 1 */
                    $initialAssessment[] = [
                        'question_id' => $questionID,
                        'attempted_answer' => $answer,
                        'status' => 0,
                        'attempt_status' => 1
                    ];
                }
            } else {
                /** if question is skipped and not marked then status is 2 and attempt_status is 1 incomplete answer */
                $initialAssessment[] = [
                    'question_id' => $questionID,
                    'attempted_answer' => $answer,
                    'status' => 2,
                    'attempt_status' => 1
                ];
            }
        }


        /**loop on previously selected answers, regenerate the selected answers array
         * and replace already selected answer if again attempt previous question.
         */
        if (!empty($userSelectedAnswers)) {
            $currentAnswer = $initialAssessment;
            $currentAnswerIsAddedInArray = false;
            foreach ($userSelectedAnswers as $key => $selectedAnswer) {
                $initialAssessment[$key] = [
                    'question_id' => $selectedAnswer['question_id'],
                    'attempted_answer' => $selectedAnswer['attempted_answer'],
                    'status' => $selectedAnswer['status'],
                    'attempt_status' => $selectedAnswer['attempt_status']
                ];

                /** if current question answer is already exists  them update the answer */
                if ($selectedAnswer['question_id'] == $currentAnswer[0]['question_id']) {
                    $initialAssessment[$key] = [
                      'question_id' => $currentAnswer[0]['question_id'],
                      'attempted_answer' => $currentAnswer[0]['attempted_answer'],
                      'status' => $currentAnswer[0]['status'],
                      'attempt_status' => $currentAnswer[0]['attempt_status']
                    ];
                    $currentAnswerIsAddedInArray = true;
                }
            }

            /** if question is not exists in already attempted questions then add this question into array */
            if (!$currentAnswerIsAddedInArray) {
                $initialAssessment[] = [
                    'question_id' => $currentAnswer[0]['question_id'],
                    'attempted_answer' => $currentAnswer[0]['attempted_answer'],
                    'status' => $currentAnswer[0]['status'],
                    'attempt_status' => $currentAnswer[0]['attempt_status']
                  ];
            }
        }


        $finalAssessment = json_encode($initialAssessment);
        // dd($finalAssessment);
        $assessment->update(['user_selected_answers_with_questions' => $finalAssessment]);

        $assessmentQuestions = json_decode($assessment->selected_questions, true);
        $nextQuestionIndex = 0;
        $questionNo = 1;
        /** get next question no */
        if (!empty($assessmentQuestions)) {
            foreach ($assessmentQuestions as $key => $assessmentQuestion) {
                if ($assessmentQuestion['question_id'] == $questionID) {
                    $nextQuestionIndex = $key + 1;
                    $questionNo = $nextQuestionIndex + 1;

                }
            }
            $nextAssessmentQuestion = $assessmentQuestions[$nextQuestionIndex];
        }

        /** get total number of questions in exam attempt */
        $noOfQuestions = getNoOfQuestionInAttempt($attemptID);
        $extractedQuestion = $nextAssessmentQuestion;

        return view('exam.partials.practice', compact('noOfQuestions', 'extractedQuestion', 'questionNo', 'attemptID'));

    }

    /** apply actions on back/previous button click */
    public function previousAction(Request $request)
    {
        $questionID = $request->question_id;
        $attemptID = $request->attempt_id;
        $assessment = Assessment::where('attempt_id', $attemptID)->first();
        $assessmentQuestions = json_decode($assessment->selected_questions, true);

        $previousQuestionIndex = 0;
        $questionNo = 1;
        /** get previous question and question no */
        if (!empty($assessmentQuestions)) {
            foreach ($assessmentQuestions as $key => $assessmentQuestion) {
                if ($assessmentQuestion['question_id'] == $questionID) {
                    $questionNo = $key;
                    $previousQuestionIndex = $key - 1;
                    break;
                }
            }
            $previousAssessmentQuestion = $assessmentQuestions[$previousQuestionIndex];
        }

        /** get total number of questions in exam attempt */
        $noOfQuestions = getNoOfQuestionInAttempt($attemptID);
        $extractedQuestion = $previousAssessmentQuestion;
        return view('exam.partials.practice', compact('noOfQuestions', 'extractedQuestion', 'questionNo', 'attemptID'));
    }

    /** this function works when user click on counter widget */
    public function examCounterAction(Request $request)
    {
        $questionID = $request->question_id;
        $attemptID = $request->attempt_id;
        $assessment = Assessment::where('attempt_id', $attemptID)->first();
        $assessmentQuestions = json_decode($assessment->selected_questions, true);

        $questionNo = 1;
        $assessmentQuestionIndex = 0;
        /** get question no */
        if (!empty($assessmentQuestions)) {
            foreach ($assessmentQuestions as $key => $assessmentQuestion) {
                if ($assessmentQuestion['question_id'] == $questionID) {
                    $assessmentQuestionIndex = $key;
                    $questionNo = $key + 1;
                    break;
                }
            }
            $assessmentQuestion = $assessmentQuestions[$assessmentQuestionIndex];
        }

        /** get total number of questions in exam attempt */
        $noOfQuestions = getNoOfQuestionInAttempt($attemptID);
        $extractedQuestion = $assessmentQuestion;
        return view('exam.partials.practice', compact('noOfQuestions', 'extractedQuestion', 'questionNo', 'attemptID'));
    }

    /** this function works when user click on review all button */
    public function reviewQuestions(Request $request)
    {
        $html = '';
        $assessment = json_decode(Assessment::where('attempt_id', $request->attempt_id)->value('user_selected_answers_with_questions'), true);
        if (!empty($assessment)) {
            foreach ($assessment as $key => $selectedAnswer) {
                if ($selectedAnswer['attempt_status'] == 0 && $selectedAnswer['status'] == 0) {
                    $color = '#FFB100';
                } else if ($selectedAnswer['attempt_status'] == 1 && $selectedAnswer['status'] != 2) {
                    $color = '#67BB04';
                } else {
                    $color = '#D60404';
                }


                $html .= '<div class="swiper-slide review-counter" data-question-id="' . $selectedAnswer['question_id'] . '">
                            <div class="slide_Item" style="background: ' . $color . '; color: #fff">
                                <span>' . ($key + 1) . '</span>
                            </div>
                          </div>';
            }
        }

        return Response()->json($html);
    }

    /** this function does the exam end work */
    public function examEnd(Request $request)
    {
        $questionID = $request->question_id;
        $answer = $request->answer;
        $attemptID = $request->attempt_id;
        $markedQuestion = $request->marked_question;
        $assessment = Assessment::where('attempt_id', $attemptID)->first();
        $userSelectedAnswers = json_decode($assessment->user_selected_answers_with_questions, true);
        $initialAssessment = [];
        $correctAnswer = Question::getQuestionCorrectAnswer($questionID);

        if ($markedQuestion == 'true') {
            /** if question marked checked then both status and attempt status is 0 means skipped */
            $initialAssessment[] = [
                'question_id' => $questionID,
                'attempted_answer' => '',
                'status' => 0,
                'attempt_status' => 0
            ];
        } else {
            if ($answer != '') {
                /** store user selected answers wrong, correct and skip with status 0, 1, 2*/
                if ($correctAnswer == $answer) {
                    /** if answer is correct then status and attempt status is 1 */
                    $initialAssessment[] = [
                        'question_id' => $questionID,
                        'attempted_answer' => $answer,
                        'status' => 1,
                        'attempt_status' => 1
                    ];
                } else {
                    /** if answer is wrong and question attempted then status is 0 and attempt_status = 1 */
                    $initialAssessment[] = [
                        'question_id' => $questionID,
                        'attempted_answer' => $answer,
                        'status' => 0,
                        'attempt_status' => 1
                    ];
                }
            } else {
                /** if question is skipped and not marked then status is 2 and attempt_status is 1 incomplete answer */
                $initialAssessment[] = [
                    'question_id' => $questionID,
                    'attempted_answer' => $answer,
                    'status' => 2,
                    'attempt_status' => 1
                ];
            }
        }


        /**loop on previously selected answers, regenerate the selected answers array
         * and replace already selected answer if again attempt previous question.
         */
        if (!empty($userSelectedAnswers)) {
            $currentAnswer = $initialAssessment;
            $currentAnswerIsAddedInArray = false;
            foreach ($userSelectedAnswers as $key => $selectedAnswer) {
                $initialAssessment[$key] = [
                    'question_id' => $selectedAnswer['question_id'],
                    'attempted_answer' => $selectedAnswer['attempted_answer'],
                    'status' => $selectedAnswer['status'],
                    'attempt_status' => $selectedAnswer['attempt_status']
                ];

                /** if current question answer is already exists  them update the answer */
                if ($selectedAnswer['question_id'] == $currentAnswer[0]['question_id']) {
                    $initialAssessment[$key] = [
                      'question_id' => $currentAnswer[0]['question_id'],
                      'attempted_answer' => $currentAnswer[0]['attempted_answer'],
                      'status' => $currentAnswer[0]['status'],
                      'attempt_status' => $currentAnswer[0]['attempt_status']
                    ];
                    $currentAnswerIsAddedInArray = true;
                }
            }

            /** if question is not exists in already attempted questions then add this question into array */
            if (!$currentAnswerIsAddedInArray) {
                $initialAssessment[] = [
                    'question_id' => $currentAnswer[0]['question_id'],
                    'attempted_answer' => $currentAnswer[0]['attempted_answer'],
                    'status' => $currentAnswer[0]['status'],
                    'attempt_status' => $currentAnswer[0]['attempt_status']
                  ];
            }
        }


        $finalAssessment = json_encode($initialAssessment);

        $assessment->update(['user_selected_answers_with_questions' => $finalAssessment]);

        return route('exam.practice.result', ['attempt_id' => $attemptID]);
    }

    /** to show the exam result page */
    public function examResult($attemptID = null)
    {
        if ($attemptID != null && Assessment::where('attempt_id', $attemptID)->exists()) {

            /** get total number of questions in exam attempt */
            $noOfQuestions = getNoOfQuestionInAttempt($attemptID);

            $attemptResult = [
                'attempt_id' => $attemptID,
                'total_questions' => $noOfQuestions,
                'total_attempt' => getAssessmentAttemptResult($attemptID, 'attempt_questions'),
                'correct' => getAssessmentAttemptResult($attemptID, 'correct'),
                'wrong' => getAssessmentAttemptResult($attemptID, 'wrong'),
                'missed' => getAssessmentAttemptResult($attemptID, 'missed')
            ];

            return view('exam.result', compact('attemptResult'));
        }
        return redirect()->to('home');
    }

    public function downloadDemoFile(Request $request)
    {
        $examID = $request->demo_exam_id;
        if ($examID != null) {
            $examCode = Exam::where('id', $examID)->value('exam_code');
            $fileName = getMediaFile('exams', 'demo_file', $examID);
            $file = public_path() . '/storage/demo_files/' . $fileName;

            $headers = [
                'Content-Type: application/pdf'
            ];

            $fileName = $examCode . '.pdf';
            return Response()->download($file, $fileName, $headers);
        }
    }

    public function downloadPdfFile($examID = null)
    {
        if ($examID != null) {
            $examCode = Exam::where('id', $examID)->value('exam_code');
            $fileName = getMediaFile('exams', 'pdf_file', $examID);
            $file = public_path() . '/storage/pdf_files/' . $fileName;

            $headers = [
                'Content-Type: application/pdf'
            ];

            $fileName = $examCode . '.pdf';
            return Response()->download($file, $fileName, $headers);
        }
    }
}
