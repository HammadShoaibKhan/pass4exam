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
        if ($slug != null && Vendor::where('slug', $slug)->exists()) {
            $title = 'Vendors';
            $vendor = Vendor::where('slug', $slug)->get();
            return view('vendor', compact('title','vendor'));
        }
        return redirect()->route('home');

    }
}
