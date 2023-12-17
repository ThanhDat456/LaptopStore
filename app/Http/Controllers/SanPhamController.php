<?php

namespace App\Http\Controllers;


use App\Models\Hangsanxuat;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Imports\SanPhamImport;
use App\Exports\SanPhamExport;
use Excel;

class SanPhamController extends Controller
{
    // Nhập từ Excel
    public function postNhap(Request $request)
    {
        Excel::import(new SanPhamImport, $request->file('file_excel'));
        return redirect()->route('sanpham')->with('status', 'Bạn đã nhập dữ liệu từ file Excel thành công');
    }
    // Xuất ra Excel
    public function getXuat()
    {
        return Excel::download(new SanPhamExport, 'danh-sach-san-pham.xlsx');
    }
    function danhsach()
    {
        $sanphams = SanPham::all();
        return view('admin.sanpham.danhsach', compact('sanphams'));
    }
    function them()
    {
        $hangsanxuat = Hangsanxuat::all();
        return view('admin.sanpham.them', compact('hangsanxuat'));
    }
    function postthem(Request $request)
    {
        // return $request->all();
        $input = $request->all();
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            $filename = $file->getClientOriginalName();
            $path = $file->move('public/uploads/san-pham/', $filename);
            $hinhanh = 'public/uploads/san-pham/' . $filename;
            $input['hinhanh'] = $hinhanh;
        }
        SanPham::create([
            'hangsanxuat_id' => $request->input('hangsanxuat_id'),
            'tensanpham' => $request->input('tensanpham'),
            'tensanpham_slug' => Str::slug($request->input('tensanpham'), '-'),
            'soluong' => $request->input('soluong'),
            'dongia' => $request->input('dongia'),
            'hinhanh' => $input['hinhanh'],
            'motasanpham' => $request->input('motasanpham'),
        ]);
        return redirect()->route('sanpham')->with('status', 'Bạn đã thêm sản phẩm thành công');
    }
    function xoa($id)
    {
        $sanpham =  SanPham::find($id);
        // Xóa tập tin khi xóa sản phẩm
        if (!empty($sanpham->hinhanh)) Storage::delete($sanpham->hinhanh);
        $sanpham->delete();
        return redirect()->route('sanpham')->with('status', 'Bạn đã xóa sản phẩm thành công');
    }
    function sua($id)
    {
        $hangsanxuat = Hangsanxuat::all();
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.sua', compact('hangsanxuat', 'sanpham'));
    }
    function postsua(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            $filename = $file->getClientOriginalName();
            $path = $file->move('public/uploads/san-pham/', $filename);
            $hinhanh = 'public/uploads/san-pham/' . $filename;
            $input['hinhanh'] = $hinhanh;
        } else {
            $input['hinhanh'] = $request->input('hinhanh1');
        }
        SanPham::where('id', $id)->update([
            'hangsanxuat_id' => $request->input('hangsanxuat_id'),
            'tensanpham' => $request->input('tensanpham'),
            'tensanpham_slug' => Str::slug($request->input('tensanpham'), '-'),
            'soluong' => $request->input('soluong'),
            'dongia' => $request->input('dongia'),
            'hinhanh' => $input['hinhanh'],
            'motasanpham' => $request->input('motasanpham'),
        ]);
        return redirect()->route('sanpham')->with('status', 'Bạn đã cập nhật sản phẩm thành công');
    }
}
