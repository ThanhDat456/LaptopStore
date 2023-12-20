@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            @if (session()->has('status'))
            <div class="alert alert-success text-center">
                {{ session()->get('status') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Danh sách hãng sản xuất</h5>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class=" text-center text-light">
                        <div class="row">
                            <div class="col-md-4 py-2 px-0">
                                <a href="{{ route('hangsanxuat.them') }}" class="text-light text-decoration-none d-inline-block w-75"><button class="btn bg-primary text-light w-100"><i class="bi bi-plus mx-2"></i>Thêm</button></a>
                            </div>
                            <div class="col-md-4 py-2 px-0 text-dark">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-arrow-bar-down me-2"></i>Nhập Excel
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <form action="{{ route('hangsanxuat.nhap') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập Excel</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <input class="form-control" type="file" id="formFile" name="file_excel">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-primary">Nhập</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 py-2 px-0">
                                <a href="{{ route('hangsanxuat.xuat') }}" class="text-light text-decoration-none d-inline-block w-75"><button class="btn bg-danger text-light w-100"><i class="bi bi-arrow-bar-up me-2"></i>Xuất Excel</button></a>
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
                            <th scope="col">Tên hãng </th>
                            <th scope="col">Đường dẫn thân thiện</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Ngày cập nhật</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($hangs->count() > 0)
                        @foreach($hangs as $value)
                        <tr class="text-center">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $value->tenhang }}</td>
                            <td>{{ $value->tenhang_slug }}</td>
                            <td>
                                @if(!empty($value->hinhanh))
                                <img style="width:80px;height:auto;" src="{{ url($value->hinhanh) }}" alt="">
                                @endif
                            </td>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->updated_at }}</td>
                            <td>
                                <a href="{{ route('hangsanxuat.sua',$value->id) }}" title="Sửa" class="text-light py-1 px-2 bg-primary me-1"><i class="bi bi-pencil-fill"></i></a>
                                <a href="{{ route('hangsanxuat.xoa',$value->id) }}" title="Xóa" onclick="return confirm('Bạn cos chắc muốn xóa {{$value->tenhang}}')" class="text-light py-1 px-2 bg-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center">Không có bản ghi!</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection