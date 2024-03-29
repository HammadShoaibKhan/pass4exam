<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class Testimonial_Controller extends Controller
{
    function index(){
        // Testimonial::where('approved',1)->get();
        // dd(Testimonial);
    }
    function create(Request $request){
        // dd('I am here');
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required',
        //     'type' => 'required',
        // ], [
        //     'name.required' => 'Name is required',
        //     'email.required' => 'Email is required',
        //     'subject.required' => 'Subject is required',
        //     'message.required' => 'Message is required',
        //     'type.required' => 'Type is required',
        // ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'type' => $request->type,
        ];
        Testimonial::create($data);
        return 'success';
    }
}
