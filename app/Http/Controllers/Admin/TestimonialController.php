<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    function index(){
        echo 'Halo World';
    }
    function create(){
        dd('create');
    }
    function testimonialView(){

    }
    function changeStatus(){

    }
}
