<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\HangSanXuatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\DonHangController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// frontend
Auth::routes(['verify' => true]);
Route::get('/', [HomeController::class, 'trangchu'])->name('trangchu');
Route::get('/logo', [HomeController::class, 'logo']);
Route::get('/giohang', [HomeController::class, 'giohang'])->name('giohang');
Route::get('/thanhtoan', [HomeController::class, 'thanhtoan'])->name('thanhtoan');
Route::get('/themgiohang/{tensanpham_slug}', [HomeController::class, 'themgiohang'])->name('themgiohang');
Route::get('/giohang/xoa/{rowId}', [HomeController::class, 'giohangxoa'])->name('giohang.xoa');
Route::get('/giohang/tatca', [HomeController::class, 'giohangtatca'])->name('giohang.tatca');
Route::get('/giohang/giam/{rowId}', [HomeController::class, 'giohang_giam'])->name('giohang.giam');
Route::get('/giohang/tang/{rowId}', [HomeController::class, 'giohang_tang'])->name('giohang.tang');
Route::post('/giohang/capnhat', [HomeController::class, 'giohang_capnhat'])->name('giohang.capnhat');
Route::get('/{slug}', [HomeController::class, 'hangsanxuat_client'])->name('hangsanxuat.client');
Route::post('/search', [HomeController::class, 'search'])->name('search');
// khách hàng
Route::post('Dat-hang', [KhachhangController::class, 'postDatHang'])->name('khachhang.dathang');
Route::get('Khach-hang/Dat-hang-thanh-cong', [KhachhangController::class, 'getDatHangThanhCong'])->name('khachhang.dathangthanhcong');

Route::middleware('auth', 'Checklogin')->group(function () {
    // admin
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // admin users
    Route::get('/admin/thanh-vien', [UserController::class, 'danhsach'])->name('user');
    Route::get('/admin/thanh-vien/them', [UserController::class, 'them'])->name('user.them');
    Route::post('/admin/thanh-vien/them', [UserController::class, 'postthem'])->name('user.postthem');
    Route::get('/admin/thanh-vien/xoa/{id}', [UserController::class, 'xoa'])->name('user.delete');
    Route::get('/admin/thanh-vien/sua/{id}', [UserController::class, 'sua'])->name('user.sua');
    Route::post('/admin/thanh-vien/sua/{id}', [UserController::class, 'postsua'])->name('user.postsua');
    // admin hãng sản xuất
    Route::get('/admin/hang-san-xuat', [HangSanXuatController::class, 'danhsach'])->name('hangsanxuat');
    Route::get('/admin/hang-san-xuat/them', [HangSanXuatController::class, 'them'])->name('hangsanxuat.them');
    Route::post('/admin/hang-san-xuat/them', [HangSanXuatController::class, 'postthem'])->name('hangsanxuat.postthem');
    Route::get('/admin/hang-san-xuat/xoa/{id}', [HangSanXuatController::class, 'xoa'])->name('hangsanxuat.xoa');
    Route::get('/admin/hang-san-xuat/sua/{id}', [HangSanXuatController::class, 'sua'])->name('hangsanxuat.sua');
    Route::post('/admin/hang-san-xuat/sua/{id}', [HangSanXuatController::class, 'postsua'])->name('hangsanxuat.postsua');
    Route::post('/admin/hangsanxuat/nhap', [HangSanXuatController::class, 'postNhap'])->name('hangsanxuat.nhap');
    Route::get('/admin/hangsanxuat/xuat', [HangSanXuatController::class, 'getXuat'])->name('hangsanxuat.xuat');
    // admin sản phẩm
    Route::get('/admin/san-pham', [SanPhamController::class, 'danhsach'])->name('sanpham');
    Route::get('/admin/san-pham/them', [SanPhamController::class, 'them'])->name('sanpham.them');
    Route::post('/admin/san-pham/them', [SanPhamController::class, 'postthem'])->name('sanpham.postthem');
    Route::get('/admin/san-pham/xoa/{id}', [SanPhamController::class, 'xoa'])->name('sanpham.xoa');
    Route::get('/admin/san-pham/sua/{id}', [SanPhamController::class, 'sua'])->name('sanpham.sua');
    Route::post('/admin/san-pham/sua/{id}', [SanPhamController::class, 'postsua'])->name('sanpham.postsua');
    // nhập xuất excel
    Route::post('/admin/sanpham/nhap', [SanPhamController::class, 'postNhap'])->name('sanpham.nhap');
    Route::get('/admin/sanpham/xuat', [SanPhamController::class, 'getXuat'])->name('sanpham.xuat');
    // đơn hàng
    Route::get('/admin/don-hang', [DonHangController::class, 'danhsach'])->name('donhang');
    Route::get('/admin/xu-ly-tinh-trang/{id}', [DonHangController::class, 'tinhtrang_capnhat'])->name('tinhtrang_capnhat');
});
