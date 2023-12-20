@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            @if(session('status'))
            <div class="alert alert-success text-center">
                {{session()->get('status')}}
            </div>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Danh sách thành viên</h5>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class=" text-center text-light">
                        <div class="row">
                            <div class="col-md-4 py-2 px-0">
                                <a href="{{ route('user.them') }}" class="text-light text-decoration-none d-inline-block w-75"><button class="btn bg-primary text-light w-100"><i class="bi bi-plus mx-2"></i>Thêm</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Email</th>
                            <th scope="col">Quyền hạn</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $value)
                        <tr class="text-center">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->username }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->role == "Admintrator" ? 'Quản trị viên' : 'Khách hàng'  }}</td>
                            <td>
                                <a href="{{ route('user.sua',$value->id) }}" title="Sửa" class="text-light py-1 px-2 bg-primary me-1"><i class="bi bi-pencil-fill"></i></a>
                                <a href="{{ route('user.delete',$value->id) }}" onclick="return confirm('Bạn có chắc muốn xóa {{ $value->name }}')"title="Xóa" class="text-light py-1 px-2 bg-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection