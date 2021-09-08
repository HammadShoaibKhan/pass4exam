<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Exam;
use App\Models\Certification;

use function PHPUnit\Framework\isEmpty;

class Exam_Controller extends Controller
{
    public function index($slug = null, $exam = null)
    {

        if ( ( $slug != null && Vendor::where('slug', $slug)->exists() ) &&
             ( $exam != null && Exam::where('exam_code', $exam)->exists() ) ) {
            $title = ucfirst($slug).' '.$exam.' - All You Need to Know';
            $exam_info = Exam::where('exam_code', $exam)
            ->join('venders', 'exams.vendor_id','venders.id')
            ->join('certifications', 'exams.certification_id','certifications.id')
            ->select('exams.*', 'venders.id as vendorId','venders.title as vendor_title',
                'certifications.title as certificate_title'
            )
            ->get();
            
            if(isEmpty($exam_info))
                return view('exam_info', compact('title','exam_info'));
        }
        return redirect()->route('home');
    }

    public function examDetail($slug = null, $exam = null)
    {

        if ( ( $slug != null && Vendor::where('slug', $slug)->exists() ) &&
             ( $exam != null && Exam::where('exam_code', $exam)->exists() ) ) {
            $title = ucfirst($slug).' '.$exam.' - All You Need to Know';
            $exam_detail = Exam::where('exam_code', $exam)
            ->join('venders', 'exams.vendor_id','venders.id')
            ->join('certifications', 'exams.certification_id','certifications.id')
            ->select('exams.*', 'venders.id as vendorId','venders.title as vendor_title',
                'certifications.title as certificate_title'
            )
            ->get();
            
            if(isEmpty($exam_detail))
                return view('exam_detail', compact('title','exam_detail'));
        }
        return redirect()->route('home');
    }
}
