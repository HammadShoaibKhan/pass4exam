<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManager;
use Illuminate\Support\Str;

class ContentManagerController extends Controller
{
    public function index()
    {
        $title = 'Content Manager';
        $contentManagers = ContentManager::orderBy('id', 'DESC')->get();
        return view('admin.contentManager.index', compact('title', 'contentManagers'));
    }
    public function create()
    {
        $title = "Content Manager";
        return view('admin.contentManager.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'placeholder_name' => 'required',
        ], [
            'type.required' => 'Page Type is required',
            'placeholder_name.required' => 'Placeholder Name is required',
        ]);
        $data = [
            'type' => $request->type,
            'placeholder_name' => Str::Slug($request->type.'-'.$request->placeholder_name),
            'placeholder_value' => $request->placeholder_value
        ];
        ContentManager::create($data);
        return back()->with('success', Str::upper($request->type).' Content created successfully!');
    }

    public function edit($id = null) {
        // if ($id != null && ContentManager::where('id', $id)->exists()) {
        //     $title = 'ContentManager';
        //     $ContentManager = ContentManager::find($id);
        //     return view('admin.ContentManagers.edit', compact('title', 'ContentManager'));
        // }
        // return redirect()->route('admin.ContentManagers');
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required'
        // ], [
        //     'name.required' => 'Name is required'
        // ]);

        // $data = [
        //     'name' => $request->name,
        //     'ContentManagername' => Str::Slug($request->name),
        //     'type' => $request->type,
        //     'status' => $request->status
        // ];

        // if ($request->password != '') {
        //     $data['password'] = bcrypt($request->password);
        // }
        // ContentManager::find($id)->update($data);
        // return back()->with('success', 'ContentManager updated successfully');
    }
}
