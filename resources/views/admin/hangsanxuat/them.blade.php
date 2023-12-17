@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Thêm hãng sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('hangsanxuat.postthem') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="tenhang">
                                <label for="floatingInput">Tên hãng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="tenhang_slug">
                                <label for="floatingInput">Đường dẫn thân thiện</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text w-25" id="basic-addon1">Hình ảnh</span>
                                <input type="file" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="hinhanh">
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