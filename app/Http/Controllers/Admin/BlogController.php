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

        if($blog->id && $request->hasFile('blog_banner_file')) {
            $fileName = removeSpacesAndLowerCase(uniqid() . '_' . $request->blog_banner_file->getClientOriginalName());
            
            $request->blog_banner_file->storeAS('blog_banner_files/', $fileName, 'public');
            $this->insertMediaFile($blog->id, $fileName);                
        }
        return back()->with('success', 'Blog Added Successfully');
    }

    public function edit($id = null)
    {
        if ($id != null && Blog::where('id', $id)->exists()) {
            $title = "Update Blog";
            $blog = Blog::find($id);
            return view('admin.blogs.edit', compact('title', 'blog'));
        }
        return redirect()->route('admin.Blogs')->with('error', 'Something went wrong');
    }

    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->title);
        $data = [
            'title' => $request->title,
            'slug' => $slug,
            'status' => $request->status,
            'description' => $request->description
        ];
        Blog::find($id)->update($data);
        if($id && $request->hasFile('blog_banner_file')) {
            $fileName = removeSpacesAndLowerCase(uniqid() . '_' . $request->blog_banner_file->getClientOriginalName());
            
            if (($id && Blog::where('id', $id)->exists()) && ($fileName != null )){
                $media_id = Media::where([
                    'link_table' => 'blogs',
                    'link_type' => 'blog_banner_file',
                    'link_id' => $id
                    ])->value('id');

                if($media_id && Media::where('id',$media_id)->exists()){
                    Media::find($media_id)->update(['file_name' => $fileName]);
                }   
                else{
                    $request->blog_banner_file->storeAS('blog_banner_files/', $fileName, 'public');
                    $this->insertMediaFile($id, $fileName);
                }
            }
        }
        return back()->with('success', 'Blog Updated Successfully');
    }

    private function insertMediaFile($id = null, $fileName = null)
    {
        if (($id != null && Blog::where('id', $id)->exists()) && ($fileName != null )){
            Media::create([
                'link_table' => 'blogs',
                'link_id' => $id,
                'link_type' => 'blog_banner_file',
                'file_name' => $fileName
            ]);
        }
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
        $blog = Blog::find($request->blog_id);
        $blog->delete();
        $blogs = Blog::orderBY('id', 'DESC')->get();
        return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }
    
    public function multipleDelete(Request $request)
    {
        Blog::whereIn('id', $request->blog_ids)->delete();
        $blogs = Blog::orderBY('id', 'DESC')->get();
        return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }

    public function changeStatus(Request $request)
    {
        Blog::whereIn('id', $request->blog_ids)->update(['status' => $request->approved]);
        $blogs = Blog::orderBY('id', 'DESC')->get();
        return view('admin.blogs.partials.blog-listings', compact('blogs'));
    }
}
