<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Certification;

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
        $vendor = Vendor::where('slug', $slug )->where('status',1)->get();
        $id = (sizeof($vendor)>0)? $vendor[0]->id:null;
        // $vendor = Vendor::where('slug', 'like', '%' . $slug . '%')->get();
        $certifications = Certification::where('vender_id',$id)->get();
        return view('vendor', compact('title','vendor','certifications'));
    }
}
