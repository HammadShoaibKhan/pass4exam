<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use Illuminate\Http\Request;
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
        Vendor::create($request->only('title', 'status', 'description'));
        return back()->with('success', 'Vendor Added Successfully');
    }

    public function edit($id = null)
    {
        if ($id != null) {
            return view('admin.vendors.edit');
        }
        return redirect()->route('admin.vendors');
    }
}
