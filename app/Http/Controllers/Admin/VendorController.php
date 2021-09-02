<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Vendor;


class VendorController extends Controller
{
    public function index()
    {
        $title = 'Vendors';
        $vendors = Vendor::orderBY('id', 'DESC')->get();
        return view('admin.vendors.index', compact('title', 'vendors'));
    }

    public function create()
    {
        $title = "Vendor";
        return view('admin.vendors.create', compact('title'));
    }

    public function store(VendorRequest $request)
    {
        $slug = Str::slug($request->title);
        $request->request->add(['slug' => $slug]);
        Vendor::create($request->only('title', 'status', 'description', 'slug'));
        return back()->with('success', 'Vendor Added Successfully');
    }

    public function edit($id = null)
    {
        if ($id != null && Vendor::where('id', $id)->exists()) {
            $title = "Update Vendor";
            $vendor = Vendor::find($id);
            return view('admin.vendors.edit', compact('title', 'vendor'));
        }
        return redirect()->route('admin.vendors');
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
        Vendor::find($id)->update($data);
        return back()->with('success', 'Vendor Updated Successfully');
    }


    public function checkNameExists(Request $request)
    {
        if (!empty($request->title)) {
            if (Vendor::where('title', $request->title)->exists()) {
                return "false";
            }
            return "true";
        }
        return "true";
    }

    public function delete(Request $request) 
    {
        Vendor::find($request->vendor_id)->delete();
        $vendors = Vendor::orderBY('id', 'DESC')->get();
        return view('admin.vendors.partials.vendor-listings', compact('vendors'));

    }

    public function multipleDelete(Request $request)
    {
        Vendor::whereIn('id', $request->vendor_ids)->delete();
        $vendors = Vendor::orderBY('id', 'DESC')->get();
        return view('admin.vendors.partials.vendor-listings', compact('vendors'));
    }


    public function changeStatus(Request $request)
    {
        Vendor::whereIn('id', $request->vendor_ids)->update(['status' => $request->status]);
        $vendors = Vendor::orderBY('id', 'DESC')->get();
        return view('admin.vendors.partials.vendor-listings', compact('vendors'));
    }
}
