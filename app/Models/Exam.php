<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;
use App\Models\Certification;

class Exam extends Model
{
    use HasFactory;
    protected $table = "exams";
    protected $guarded = [];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function certification()
    {
        return $this->belongsTo(certification::class, 'certification_id');
    }

    public function getPricing()
    {
        return json_decode($this->pricing);
    }

    public function caseStudies()
    {
        return $this->hasMany(CaseStudy::class);
    }

    public function questions()
    {
        return $this->hasManyThrough(Question::class, CaseStudy::class);
    }
}
