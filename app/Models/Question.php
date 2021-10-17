<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function caseStudy()
    {
        return $this->belongsTo(CaseStudy::class, 'case_study_id');
    }

    public static function getQuestionCorrectAnswer($questionID)
    {
        $correctAnswer = '';
        $questions = json_decode(self::where('id', $questionID)->value('answer'));
        if (!empty($questions)) {
            foreach ($questions as $question) {
                if ($question->status) {
                    $correctAnswer = $question->text;
                }
            }
        }
        return $correctAnswer;
    }

}
