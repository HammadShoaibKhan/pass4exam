<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(Question::class, 'case_study_id');
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}