<?php

namespace App\Http\Controllers;

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
                return view('exam_demo', compact('title','exam'));
            }
        }
        return redirect()->route('home');
    }
}
