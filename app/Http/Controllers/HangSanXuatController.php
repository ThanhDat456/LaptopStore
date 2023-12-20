<?php

namespace App\Http\Controllers;

use App\Models\Hangsanxuat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Imports\HangSanXuatImport;
use App\Exports\HangSanXuatExport;
use Excel;

class HangSanXuatController extends Controller
{
    //
    public function postNhap(Request $request)
    {
        Excel::import(new HangSanXuatImport, $request->file('file_excel'));
        return redirect()->route('hangsanxuat')->with('status','Bạn đã nhập dữ liệu từ file Excel thành công');
    }
    // Xuất ra Excel
    public function getXuat()
    {
        return Excel::download(new HangSanXuatExport, 'danh-sach-hang-san-xuat.xlsx');
    }
    function danhsach()
    {
        $hangs = Hangsanxuat::all();
        return view('admin.hangsanxuat.danhsach', compact('hangs'));
    }
    function them()
    {
        return view('admin.hangsanxuat.them');
    }
    function postthem(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            $filename = $file->getClientOriginalName();
            $path = $file->move('public/uploads/hang-san-xuat/', $filename);
            $hinhanh = 'public/uploads/hang-san-xuat/' . $filename;
            $input['hinhanh'] = $hinhanh;
        }
        // return $request->all();
        Hangsanxuat::create([
            'tenhang' => $request->input('tenhang'),
            'tenhang_slug' => Str::slug($request->input('tenhang_slug'), '-'),
            'hinhanh' =>  $input['hinhanh'],
        ]);
        return redirect()->route('hangsanxuat')->with('status', 'Bạn đã thêm hãng sản xuất thành công');
    }
    function xoa($id)
    {
        Hangsanxuat::find($id)->delete();
        return redirect()->route('hangsanxuat')->with('status', 'Bạn đã xóa hãng sản xuất thành công');
    }
    function sua($id)
    {
        $hang = Hangsanxuat::find($id);
        return view('admin.hangsanxuat.sua', compact('hang'));
    }
    function postsua(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            $filename = $file->getClientOriginalName();
            $path = $file->move('public/uploads/hang-san-xuat/', $filename);
            $hinhanh = 'public/uploads/hang-san-xuat/' . $filename;
            $input['hinhanh'] = $hinhanh;
        } else {
            $input['hinhanh'] = $request->input('hinhanh1');
        }

        Hangsanxuat::where('id', $id)->update([
            'tenhang' => $request->input('tenhang'),
            'tenhang_slug' => Str::slug($request->input('tenhang_slug'), '-'),
            'hinhanh' => $input['hinhanh'],
        ]);

        return redirect()->route('hangsanxuat')->with('status', 'Bạn đã cập nhật hãng sản xuất thành công');
    }
}
