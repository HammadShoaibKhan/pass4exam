<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index($slug = null)
    {
        $title = 'Vendors';
        $vendor = Vendor::where('slug', $slug )->get();
        // $vendor = Vendor::where('slug', 'like', '%' . $slug . '%')->get();
        return view('vendor', compact('title','vendor'));
    }
}
