<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class Blog_Controller extends Controller
{
    function index()
    {
        $title = 'Blogs';
        $blogs = Blog::where('status',1)->get();
        return view('blogs', compact('title','blogs'));
    }

    function blog($blogSlug = null)
    {
        if ( $blogSlug != null && Blog::where('slug', $blogSlug)->exists() ) 
        {
            $title = ucfirst($blogSlug);
            $blog = Blog::where('slug', $blogSlug)->first();
            return view('blog', compact('title','blog'));
        }
        return redirect()->route('home');
    }
}
