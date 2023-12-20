@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Thêm sản phẩm mới</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('sanpham.postthem') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25" id="basic-addon1">Hãng sản xuất</span>
                            <select class="form-select" aria-label="Default select example" name="hangsanxuat_id">
                                @foreach($hangsanxuat as $value)
                                <option value="{{ $value->id }}">{{ $value->tenhang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="tensanpham">
                                <label for="floatingInput">Tên sản phẩm</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="soluong">
                                <label for="floatingInput">Số lượng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="dongia">
                                <label for="floatingInput">Đơn giá</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text w-25" id="basic-addon1">Hình ảnh</span>
                                <input type="file" class="form-control" name="hinhanh" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="motasanpham" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Mô tả</label>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-primary py-2 px-5 text-light mt-1 mb-3 float-end" value="thêm" name="them">Thêm</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
@endsection