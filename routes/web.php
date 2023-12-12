<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\HangSanXuatController;
use App\Http\Controllers\UserController;
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
Route::get('/',[HomeController::class,'trangchu']);
Route::get('/logo',[HomeController::class,'logo']);
Route::get('/giohang',[HomeController::class,'giohang'])->name('giohang');
Route::get('/thanhtoan',[HomeController::class,'thanhtoan'])->name('thanhtoan');

// admin
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
// admin users
Route::get('/thanh-vien',[UserController::class,'danhsach'])->name('user');
Route::get('/thanh-vien/them',[UserController::class,'them'])->name('user.them');
// admin hãng sản xuất
Route::get('/hang-san-xuat',[HangSanXuatController::class,'danhsach'])->name('hangsanxuat');
Route::get('/hang-san-xuat/them',[HangSanXuatController::class,'them'])->name('hangsanxuat.them');
// admin sản phẩm
Route::get('/loai-san-pham',[LoaiSanPhamController::class,'danhsach'])->name('loaisanpham');
Route::get('/loai-san-pham/them',[LoaiSanPhamController::class,'them'])->name('loaisanpham.them');
// admin sản phẩm
Route::get('/san-pham',[SanPhamController::class,'danhsach'])->name('sanpham');
Route::get('/san-pham/them',[SanPhamController::class,'them'])->name('sanpham.them');
