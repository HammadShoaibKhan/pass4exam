<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Certs Idea - Study for Certification Exams';
        $vendors = Vendor::whereHas('exams')->get();
        $testimonials = Testimonial::where('approved',1)->inRandomOrder()->limit(4)->get();
        return view('welcome',compact('title','vendors','testimonials'));
    }
}
