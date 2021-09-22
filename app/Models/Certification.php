<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $table = "certifications";
    protected $guarded = [];

    public function exams()
    {
        return $this->hasMany(Exam::class, 'certification_id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vender_id');
    }
}
