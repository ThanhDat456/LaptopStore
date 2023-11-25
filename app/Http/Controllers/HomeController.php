<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    function trangchu(){
        return view('frontend.trangchu');
    }
    function logo(){
        return view('frontend.logo');
    }
}
