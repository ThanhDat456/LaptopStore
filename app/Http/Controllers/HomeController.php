<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hangsanxuat;
use App\Models\SanPham;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    function trangchu()
    {
        $hangsanxuat = Hangsanxuat::all();
        $sanphammoi = SanPham::orderBy('created_at', 'desc')->get();
        $sanpham = SanPham::paginate(12);
        return view('frontend.trangchu', compact('hangsanxuat', 'sanphammoi', 'sanpham'));
    }
    function logo()
    {
        return view('frontend.logo');
    }
    function giohang()
    {
        return view('frontend.giohang');
    }
    function thanhtoan()
    {
        if (Auth::check())
            return view('frontend.thanhtoan');
        else
            return redirect()->route('login');
    }
    function themgiohang($tensanpham_slug)
    {
        $sanpham = SanPham::where('tensanpham_slug', $tensanpham_slug)->first();
        Cart::add([
            'id' => $sanpham->id,
            'name' => $sanpham->tensanpham,
            'price' => $sanpham->dongia,
            'qty' => 1,
            'weight' => 0,
            'options' => [
                'image' => $sanpham->hinhanh
            ]
        ]);
        return redirect()->route('trangchu')->with('status', 'Thêm giỏ hàng thành công');
    }
    function giohangxoa($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('giohang')->with('status', 'Đã xóa sản phẩm thành công');
    }
    function giohangtatca()
    {
        Cart::destroy();
        return redirect()->route('giohang')->with('status', 'Đã xóa giỏ hàng thành công');
    }
    function giohang_giam($rowId)
    {
        $row = Cart::get($rowId);
        if ($row->qty > 1) {
            Cart::update($rowId, $row->qty - 1);
        }
        return redirect()->route('giohang');
    }
    function giohang_tang($rowId)
    {
        $row = Cart::get($rowId);
        if ($row->qty < 10) {
            Cart::update($rowId, $row->qty + 1);
        }
        return redirect()->route('giohang');
    }
    function giohang_capnhat(Request $request)
    {
        foreach ($request->qty as $row_id => $quantity) {
            if ($quantity <= 0)
                Cart::update($row_id, 1);
            else if ($quantity > 10)
                Cart::update($row_id, 10);
            else
                Cart::update($row_id, $quantity);
        }
        return redirect()->route('giohang')->with('status', 'Cập nhật thành công');
    }
    function hangsanxuat_client($slug)
    {
        $hangsanxuat = Hangsanxuat::all();
        $hangsanxuat_slug = Hangsanxuat::where('tenhang_slug', $slug)->get();
        return view('frontend.hangsanxuat', compact('hangsanxuat', 'hangsanxuat_slug'));
    }
    function search(Request $request)
    {
        if (!empty($request->input('search'))) {
            $search = $request->input('search');
            $sanpham = Sanpham::where('tensanpham', 'LIKE', "%$search%")->get();
            $hangsanxuat = Hangsanxuat::all();
            return view('frontend.search', compact('search', 'sanpham', 'hangsanxuat'));
        } else {
            return redirect()->route('trangchu');
        }
    }
}
