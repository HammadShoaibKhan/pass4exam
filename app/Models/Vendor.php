<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Certification;

class Vendor extends Model
{
    use HasFactory;
    protected $table = "venders";
    protected $guarded = [];

    public function certifications()
    {
        return $this->hasMany(Certification::class, 'vender_id');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class, 'vendor_id');
    }

    public function getTotalExams()
    {  
        return $this->exams->where('status',1)->count();
    }
}
