<?php

namespace App\Http\Controllers;

use App\Models\Donhang;
use App\Models\Donhangchitiet;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    //
    function danhsach()
    {
        $donhang = Donhang::all();
        $donhang_chitiet = Donhangchitiet::all();
        return view('admin.donhang.danhsach',compact('donhang','donhang_chitiet'));
    }
    function tinhtrang_capnhat($id){
        Donhang::where('id',$id)->update([
            'tinhtrang' => 0,
        ]);
        return redirect()->route('donhang')->with('status','Bạ đã xử lý đơn hàng thành công');
    }
}
