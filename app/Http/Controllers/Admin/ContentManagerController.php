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

    public function edit($type = null) {
        if ($type != null && ContentManager::where('type', $type)->exists()) {
            $title = 'Content Manager';
            $ContentManager = ContentManager::WHERE('type',$type)->get();
            return view('admin.contentManager.edit', compact('title', 'ContentManager'));
        }
        return redirect()->route('admin.contents');
    }

    public function update(Request $request, $id)
    {
        $data = [
            'placeholder_value' => $request->placeholder_value
        ];

        ContentManager::find($id)->update($data);
        return back()->with('success', Str::upper($request->type).' Content Updated Successfully');
    }
}
