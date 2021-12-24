<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Testimonial;

use Illuminate\Http\Request;

class Blog_Controller extends Controller
{
    function index()
    {
        $title = 'Blogs';
        $blogs = Blog::where('status',1)->get();
        return view('blogs', compact('title','blogs'));
    }
}
