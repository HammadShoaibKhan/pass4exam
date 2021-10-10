<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index()
    {
        $title = "Orders";
        $carts = session()->get('carts',[]);
        // $users = User::whereNotIn('email', ['admin@certsidea.com', auth()->user()->email])->orderBy('id', 'DESC')->get();
        return view('admin.users.index', compact('title'));
    }
}
