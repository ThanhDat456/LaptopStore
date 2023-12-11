<?php

namespace App\Http\Controllers;

use App\Models\HangSanXuat;
use Illuminate\Http\Request;

class HangSanXuatController extends Controller
{
    //
    function danhsach(){
        return view('admin.hangsanxuat.danhsach');
    }
    function them(){
        return view('admin.hangsanxuat.them');
    }
}
