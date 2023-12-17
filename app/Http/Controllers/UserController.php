<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    function danhsach()
    {
        $users = User::all();
        return view('admin.users.danhsach', compact('users'));
    }
    function them()
    {
        return view('admin.users.them');
    }
    function postthem(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'username' => Str::before($request->input('name'), '@'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect()->route('user')->with('status', 'Bạn đã thêm thành viên thành công');
    }
    function xoa($id)
    {
        User::find($id)->delete();
        return redirect()->route('user')->with('status', 'Bạn đã xóa thành viên thành công');
    }
    function sua($id)
    {
        $user = User::find($id);
        return view('admin.users.sua', compact('user'));
    }
    function postsua(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);
        return redirect()->route('user')->with('status', 'Bạn đã cập nhật thông tin thành công');
    }
}
