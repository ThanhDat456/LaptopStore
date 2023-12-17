<?php

namespace App\Http\Controllers;

use App\Models\Donhang;
use App\Models\Donhangchitiet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\DonhangMail;

class KhachhangController extends Controller
{
    //
    function postDatHang(Request $request)
    {
        // Kiểm tra
        $this->validate($request, [
            'diachigiaohang' => ['required', 'string', 'max:255'],
            'dienthoaigiaohang' => ['required', 'string', 'max:255'],
        ]); // Lưu vào đơn hàng
        $dh = new Donhang();
        $dh->user_id = Auth::user()->id;
        $dh->tinhtrang = 1;
        $dh->tongtien = Cart::priceTotal();
        $dh->diachigiaohang = $request->diachigiaohang;
        $dh->dienthoaigiaohang = $request->dienthoaigiaohang;
        $dh->save();
        // Lưu vào đơn hàng chi tiết
        foreach (Cart::content() as $value) {
            $ct = new Donhangchitiet();
            $ct->donhang_id = $dh->id;
            $ct->sanpham_id = $value->id;
            $ct->soluongban = $value->qty;
            $ct->dongiaban = $value->price;
            $ct->save();
        }
        Mail::to(Auth::user()->email)->send(new DonhangMail($dh));
        return redirect()->route('khachhang.dathangthanhcong');
    }
    public function getDatHangThanhCong()
    {
        Cart::destroy();
        return view('frontend.dathangthanhcong');
    }
}
