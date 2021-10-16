<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    function index(){
        $title = "Testimonials";
        $testimonials = Testimonial::orderBY('id', 'DESC')->get();
        return view('admin.testimonials.index', compact('title','testimonials'));
    }

    function testimonialView($id=null){
        if ($id != null && Testimonial::where('id', $id)->exists()) {
            $title = "Testimonials";
            $testimonial = Testimonial::find($id);
            return view('admin.testimonials.view', compact('title', 'testimonial'));
        }
        return redirect()->route('admin.testimonials');
    }
    
    public function delete(Request $request)
    {
        $user = Testimonial::find($request->testimonial_id);
        $user->delete();
        $testimonials = Testimonial::orderBY('id', 'DESC')->get();
        return view('admin.testimonials.partials.testimonial-listings', compact('testimonials'));
    }
    
    public function multipleDelete(Request $request)
    {
        Testimonial::whereIn('id', $request->testimonial_ids)->delete();
        $testimonials = Testimonial::orderBY('id', 'DESC')->get();
        return view('admin.testimonials.partials.testimonial-listings', compact('testimonials'));
    }

    public function changeStatus(Request $request)
    {
        testimonial::whereIn('id', $request->testimonial_ids)->update(['approved' => $request->approved]);
        $testimonials = Testimonial::orderBY('id', 'DESC')->get();
        return view('admin.testimonials.partials.testimonial-listings', compact('testimonials'));
    }
    
}
