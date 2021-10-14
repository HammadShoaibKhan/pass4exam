<?php
use \App\Models\Vendor;
use App\Models\Media;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Assessment;

/**to get vendors for header navbar */
function navbarVendors()
{
    return Vendor::orderBy('title', 'ASC')
    ->select('id', 'title', 'slug')
    ->where(['status' => 1, 'top_navbar_vendor' => 1])
        ->has('certifications')
    ->take(4)
    ->get();
}

/**to get popular vendors */
function popularVendors()
{
    return Vendor::orderBy('title', 'ASC')
        ->select('id', 'title', 'slug')
        ->where(['status' => 1, 'popular_tab_vendor' => 1])
        ->has('exams')
        ->take(4)
        ->get();
}

/**to get recent updated exams */
function recentUpdatedExams()
{
    return Exam::orderBy('updated_at', 'DESC')
        ->where('status', 1)
        ->take(9)
        ->get();
}

function removeSpacesAndLowerCase($data)
{
    return str_replace(' ', '', strtolower($data));
}

function getMediaFile($linkTable, $linkType, $linkID)
{
    return Media::where([
        'link_table' => $linkTable,
        'link_type' => $linkType,
        'link_id' => $linkID
        ])->value('file_name');
}

function getQuestionAnswers($questionID)
{
    return json_decode(Question::where('id', $questionID)->value('answer'), true);
}

function getNoOfQuestionInAttempt($attemptID)
{
    return Assessment::where('attempt_id', $attemptID)->value('question_range');
}

function getUserAlreadyAttemptedAnswers($attemptID, $questionID)
{
    $attemptAnswer = '';
    $userSelectedAnswers = json_decode(Assessment::where('attempt_id', $attemptID)->value('user_selected_answers_with_questions'), true);
    if (!empty($userSelectedAnswers)) {
        foreach ($userSelectedAnswers as $answer) {
            if ($answer['question_id'] == $questionID) {
                $attemptAnswer = $answer['attempted_answer'];
            }
        }
    }
    return $attemptAnswer;
}

/** function to check if question is marked in practice exam */
function isQuestionMarked($attemptID, $questionID)
{
    $marked = false;
    $userSelectedAnswers = json_decode(Assessment::where('attempt_id', $attemptID)->value('user_selected_answers_with_questions'), true);
    if (!empty($userSelectedAnswers)) {
        foreach ($userSelectedAnswers as $answer) {
            if ($answer['question_id'] == $questionID && $answer['attempt_status'] == 0 && $answer['status'] == 0) {
                $marked = true;
            }
        }
    }
    return $marked;
}

/** function to get assessment result by given key and attempt id */
function getAssessmentAttemptResult($attemptID, $key)
{
    $result = 0;
    $assessment = Assessment::where('attempt_id', $attemptID)->first();
    if (!empty($assessment)) {
        $assessmentUserAnswers = json_decode($assessment->user_selected_answers_with_questions, true);
        if (!empty($assessmentUserAnswers)) {
            foreach ($assessmentUserAnswers as $answer) {
                if ($key == 'attempt_questions') {
                    if ($answer['attempt_status'] == 1 && $answer['status'] != 2) {
                        $result++;
                    }
                } elseif($key == 'correct') {
                    if ($answer['status'] == 1 && $answer['attempt_status'] == 1) {
                        $result++;
                    }
                } elseif($key == 'wrong') {
                    if (($answer['status'] == 2 || $answer['status'] == 0) && $answer['attempt_status'] == 1) {
                        $result++;
                    }
                } elseif($key == 'missed') {
                    if (($answer['status'] == 2 && $answer['attempt_status'] == 1) || ($answer['status'] == 0 && $answer['attempt_status'] == 0)) {
                        $result++;
                    }
                }
            }
        }
    }
    return $result;
}

/** function to get assessment user selected answers for given attempt id */
function getAssessmentUserAttemptQuestion($attemptID)
{
    return json_decode(Assessment::where('attempt_id', $attemptID)->value('user_selected_answers_with_questions'), true);
}

/** function to get assessment question correct and user selected answers
 * if given $text then return user selected answer alphabet
 */
function getQuestionCorrectAnswerwithAlphabet($questionID, $text = null)
{
    $alphabet = 'A';
    $answers = json_decode(Question::where('id', $questionID)->value('answer'), true);
    if (!empty($answers)) {
        $key = 0;
        foreach ($answers as $answer) {
            if ($text != null) {
                if ($answer['text'] == $text) {
                    if ($key == 0) {
                        $alphabet = 'A';
                    } else if ($key == 1) {
                        $alphabet = 'B';
                    } else if ($key == 2) {
                        $alphabet = 'C';
                    } else if ($key == 3) {
                        $alphabet = 'D';
                    }
                }
            } else {
                if ($answer['status'] == 1) {
                    if ($key == 0) {
                        $alphabet = 'A';
                    } else if ($key == 1) {
                        $alphabet = 'B';
                    } else if ($key == 2) {
                        $alphabet = 'C';
                    } else if ($key == 3) {
                        $alphabet = 'D';
                    }
                }
            }
            $key++;
        }
    }
    return $alphabet;
}