<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function danhsach(){
        return view('admin.users.danhsach');
    }
    function them(){
        return view('admin.users.them');
    }
}
