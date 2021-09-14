<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Exam;
use App\Models\Certification;

use function PHPUnit\Framework\isEmpty;

class Exam_Controller extends Controller
{
    public function index($vendorSlug = null, $examSlug = null)
    {
        if ( ( $vendorSlug != null && Vendor::where('slug', $vendorSlug)->exists() ) &&
             ( $examSlug != null && Exam::where('slug', $examSlug)->exists() ) ) {
            $title = ucfirst($vendorSlug).' '.$examSlug.' - All You Need to Know';
            $exam = Exam::where('slug', $examSlug)->first();
            return view('exam_info', compact('title','exam'));
        }
        return redirect()->route('home');
    }

    public function examDetail($vendorSlug = null, $examSlug = null)
    {
        if ( ( $vendorSlug != null && Vendor::where('slug', $vendorSlug)->exists() ) &&
             ( $examSlug != null && Exam::where('slug', $examSlug)->exists() ) ) {
            $title = ucfirst($vendorSlug).' '.$examSlug.' Actual Questions Instant Download';
            $exam = Exam::where('slug', $examSlug)->first();
            return view('exam_detail', compact('title','exam'));
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
}
