<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $title = "Shoping Cart";
        // $exams = ::orderBy('id', 'DESC')->get();
        return view('cart', compact('title'));

    }
}
