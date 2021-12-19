<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Media;
use App\Http\Requests\BlogRequest;
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

    public function store(BlogRequest $request)
    {
        $slug = Str::slug($request->title);
        $request->request->add(['slug' => $slug]);
        $blog = Blog::create($request->only('title', 'slug', 'description', 'status'));

        if($blog->id)
        {
            if ($request->hasFile('blog_banner_file')) {
                $fileName = removeSpacesAndLowerCase(uniqid() . '_' . $request->blog_banner_file->getClientOriginalName());
                
                $request->blog_banner_file->storeAS('blog_banner_files/', $fileName, 'public');
                Media::create([
                    'link_table' => 'blogs',
                    'link_id' => $blog->id,
                    'link_type' => 'blog_banner_file',
                    'file_name' => $fileName
                ]);
            }
        }
        return back()->with('success', 'Blog Added Successfully');
    }


    public function edit($id = null)
    {
        if ($id != null && Blog::where('id', $id)->exists()) {
            $title = "Update Blog";
            $blog = Blog::find($id);
            // $vendors = Vendor::orderBy('title', 'ASC')->whereStatus(1)->select('id', 'title')->get();
            // $certifications = Certification::orderBy('title', 'ASC')->whereStatus(1)->select('id', 'title')->get();
            return view('admin.blogs.edit', compact('title', 'blog'));
        }
        return redirect()->route('admin.Blogs')->with('error', 'Something went wrong');
    }

    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->title);
        $BlogCode = strToUpper(Str::slug($request->Blog_code));
        $data = [
            'title' => $request->title,
            'vendor_id' => $request->vendor_id,
            'certification_id' => $request->certification_id,
            'Blog_code' => $BlogCode,
            'slug' => $slug,
            'status' => $request->status,
            'description' => $request->description
        ];
        Blog::find($id)->update($data);
        return back()->with('success', 'Blog Updated Successfully');
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
        $blog = blog::find($request->blog_id);
        $blog->delete();
        $blogs = blog::orderBY('id', 'DESC')->get();
        return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }
    
    public function multipleDelete(Request $request)
    {
        blog::whereIn('id', $request->blog_ids)->delete();
        $blogs = blog::orderBY('id', 'DESC')->get();
        return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }

    public function changeStatus(Request $request)
    {
        // blog::whereIn('id', $request->blog_ids)->update(['approved' => $request->approved]);
        // $blogs = blog::orderBY('id', 'DESC')->get();
        // return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }
}
