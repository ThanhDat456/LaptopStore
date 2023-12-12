@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Danh sách thành viên</h5>
                        <a href="#" class="status"><span>Chờ duyệt</span></a>
                        <a href="#" class="status"><span>Đã duyệt</span></a>
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
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Email</th>
                            <th scope="col">Quyền hạn</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">1</th>
                            <th><img src="{{ url('public/images/admin.jpg')  }}" style="width:40px; height:auto;border-radius:100%;"alt=""></th>
                            <td>Tần Nhật Hào</td>
                            <td>TuHaoThien</td>
                            <td>Hao@gmail.com</td>
                            <td>Admin</td>
                            <td>
                                <a href="" title="Sửa" class="text-light py-1 px-2 bg-primary me-1"><i class="bi bi-pencil-fill"></i></a>
                                <a href="" title="Xóa" class="text-light py-1 px-2 bg-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th scope="row">2</th>
                            <th><img src="{{ url('public/images/user.png')  }}" style="width:40px; height:auto;border-radius:100%;"alt=""></th>
                            <td>Nguyễn Ngọc Hóa</td>
                            <td>MyNghi</td>
                            <td>Hoa@gmail.com</td>
                            <td>Khách hàng</td>
                            <td>
                                <a href="" title="Sửa" class="text-light py-1 px-2 bg-primary me-1"><i class="bi bi-pencil-fill"></i></a>
                                <a href="" title="Xóa" class="text-light py-1 px-2 bg-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection