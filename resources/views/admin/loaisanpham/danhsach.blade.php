@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Danh sách loại sản phẩm</h5>
                        <a href="#" class="status"><span>Chờ duyệt</span></a>
                        <a href="#" class="status"><span>Đã duyệt</span></a>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class=" text-center text-light">
                        <div class="row">
                            <div class="col-md-4 py-2 px-0">
                                <a href="{{ route('loaisanpham.them') }}" class="text-light text-decoration-none d-inline-block w-75"><button class="btn bg-primary text-light w-100"><i class="bi bi-plus mx-2"></i>Thêm</button></a>
                            </div>
                            <div class="col-md-4 py-2 px-0 text-dark">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-arrow-bar-up me-3"></i>Nhập Excel
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập Excel</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-primary">Lưu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-2 px-0">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-arrow-bar-up me-3"></i>Xuất Excel
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xuất Excel</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-primary">Lưu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <th scope="col">Tên loại sản phẩm </th>
                            <th scope="col">Đường dẫn thân thiện</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">1</th>
                            <td>Asus</td>
                            <td>asus</td>
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