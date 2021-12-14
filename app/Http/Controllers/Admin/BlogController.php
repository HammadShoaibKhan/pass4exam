<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        $title = "Blogs";
        // $blogs = blog::orderBY('id', 'DESC')->get();
        $blogs = array();
        return view('admin.blogs.index', compact('title','blogs'));
    }

    function blogView($id=null){
        // if ($id != null && blog::where('id', $id)->exists()) {
        //     $title = "blogs";
        //     $blog = blog::find($id);
        //     return view('admin.blogs.view', compact('title', 'blog'));
        // }
        // return redirect()->route('admin.blogs');
    }
    
    public function delete(Request $request)
    {
        // $user = blog::find($request->blog_id);
        // $user->delete();
        // $blogs = blog::orderBY('id', 'DESC')->get();
        // return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }
    
    public function multipleDelete(Request $request)
    {
        // blog::whereIn('id', $request->blog_ids)->delete();
        // $blogs = blog::orderBY('id', 'DESC')->get();
        // return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }

    public function changeStatus(Request $request)
    {
        // blog::whereIn('id', $request->blog_ids)->update(['approved' => $request->approved]);
        // $blogs = blog::orderBY('id', 'DESC')->get();
        // return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }
}
