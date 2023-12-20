@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Cập nhật sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('sanpham.sua',$sanpham->id) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25" id="basic-addon1">Hãng sản xuất</span>
                            <select class="form-select" aria-label="Default select example" name="hangsanxuat_id">
                                @foreach($hangsanxuat as $value)
                                <option value="{{ $value->id }}" {{ ($sanpham->hangsanxuat_id == $value->id) ? 'selected' : '' }}> {{ $value->tenhang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $sanpham->tensanpham }}" name="tensanpham">
                                <label for="floatingInput">Tên sản phẩm</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $sanpham->soluong }}" name="soluong">
                                <label for="floatingInput">Số lượng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $sanpham->dongia }}" name="dongia">
                                <label for="floatingInput">Đơn giá</label>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <img style="width:80px;height:auto;" src="{{ asset($sanpham->hinhanh) }}" alt="">
                                    <input type="hidden" name="hinhanh1" value="{{ $sanpham->hinhanh }}">
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text w-25" id="basic-addon1">Hình ảnh</span>
                                        <input type="file" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="hinhanh">
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="motasanpham" id="floatingTextarea2" style="height: 100px">{{ $sanpham->motasanpham }}</textarea>
                                <label for="floatingTextarea2">Mô tả</label>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-primary py-2 px-5 text-light mt-1 mb-3 float-end" value="sua" name="sua">Cập nhật</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
@endsection