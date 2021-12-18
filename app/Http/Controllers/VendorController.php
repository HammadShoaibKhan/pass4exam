<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Exam;
use App\Models\Testimonial;

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
            $testimonials = Testimonial::where('approved',1)->inRandomOrder()->limit(4)->get();
            return view('vendor', compact('title','vendor','testimonials'));
        }
        return redirect()->route('home');
    }

    /**to get vendor exams options list if exam have demo pdf file */
    public function getVendorExams(Request $request)
    {
        $vendor = Vendor::where('id', $request->vendor_id)->first();
        $exams = $vendor->exams;
        $html = '';
        if (count($exams) > 0) {
            foreach ($exams as $exam) {
                if (getMediaFile('exams', 'demo_file', $exam->id) != null) {
                    $html .= '<option value="' . $exam->id . '">' . $exam->title . '</option>';
                }
            }
        }
        return $html;
    }

    /** show discount deals page*/
    public function discountDeals($sortBy = null)
    {
        $vendors = Vendor::where('status', 1);
        if ($sortBy != null) {
            $vendors = $vendors->where('slug', 'like', $sortBy . '%');
        }
        $vendors = $vendors->inRandomOrder()->get();
        return view('discount_deals', compact('vendors'));
    }
}
