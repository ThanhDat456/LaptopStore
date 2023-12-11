<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //
    function danhsach()
    {
        return view('admin.sanpham.danhsach');
    }
    function them()
    {
        return view('admin.sanpham.them');
    }
}
