<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Exam;

use function PHPUnit\Framework\isEmpty;

class VendorController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index($slug = null)
    {
        if ($slug != null && Vendor::where('slug', $slug)->exists()) {
            $title = 'Vendors';
            $vendor = Vendor::where('slug', $slug)->first();
            $exams='';
            if(isEmpty($vendor))
                $exams = Exam::where('vendor_id', $vendor->id)->get();
            return view('vendor', compact('title','vendor','exams'));
        }
        return redirect()->route('home');

    }
}
