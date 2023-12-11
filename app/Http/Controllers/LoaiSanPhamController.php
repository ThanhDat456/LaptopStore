<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
     //
     function danhsach(){
        return view('admin.loaisanpham.danhsach');
    }
    function them(){
        return view('admin.loaisanpham.them');
    }
}
