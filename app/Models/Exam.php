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
}
