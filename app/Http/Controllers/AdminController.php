<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donhang;
use App\Models\Donhangchitiet;
class AdminController extends Controller
{
    //
    function dashboard(){
        $user = User::where('role','subscriber')->count();
        $donhangs = Donhang::where('tinhtrang',0)->sum('tongtien');
        $donhang_dangxuly = Donhang::where('tinhtrang',1)->count();
        $donhang_thanhcong = Donhang::where('tinhtrang',0)->count();
        $count = [$user,$donhangs, $donhang_dangxuly, $donhang_thanhcong];
        $donhang = Donhang::where('tinhtrang',1)->get();
        $donhang_chitiet = Donhangchitiet::all();
        return view('admin.dashboard',compact('count','donhang','donhang_chitiet'));
    }
}
