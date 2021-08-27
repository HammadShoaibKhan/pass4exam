<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $title = 'Vendors';
        return view('admin.vendors.index', compact('title'));
    }
}
