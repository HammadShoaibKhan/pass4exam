<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    function index(){
        $title = "Blogs";
        $blogs = Blog::orderBY('id', 'DESC')->get();
        return view('admin.blogs.index', compact('title','blogs'));
    }

    public function create()
    {
        $title = "Blog";
        $blog = Blog::orderBy('title', 'ASC')->whereStatus(1)->select('id', 'title')->get();
        return view('admin.blogs.create', compact('title', 'blog'));
    }

    public function checkNameExists(Request $request)
    {
        if (!empty($request->title)) {
            if (Blog::where('title', $request->title)->exists()) {
                return "false";
            }
            return "true";
        }
        return "true";
    }

    /**
     * @description create or update desktop file
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadDesktopFile(Request $request)
    {
        $request->validate([
            'blog_banner_file' => 'required'
        ], [
            'blog_banner_file.required' => 'Select an Image file'
        ]);

        if ($request->hasFile('blog_banner_file')) {
            $fileName = removeSpacesAndLowerCase(uniqid() . '_' . $request->blog_banner_file->getClientOriginalName());
            /*delete existing file if any*/
            // $file = Media::where([
            //     'link_table' => 'exams',
            //     'link_type' => 'blog_banner_file',
            //     'link_id' => $request->exam_id
            // ])->first();
            // if (!empty($file)) {
            //     if (Storage::delete('public/blog_banner_files/'. $file->file_name)) {
            //         $file->delete();
            //     }
            // }

            $request->blog_banner_file->storeAS('blog_banner_files/', $fileName, 'public');
            Media::create([
                'link_table' => 'blogs',
                'link_id' => $request->id,
                'link_type' => 'blog_banner_file',
                'file_name' => $fileName
            ]);
            return back()->with('success', 'Blog Banner uploaded successfully.');
        }
        return back()->with('error', 'Something went wrong!');
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
