@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Sửa hãng sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('hangsanxuat.postsua',$hang->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="tenhang" value="{{ $hang->tenhang }}">
                                <label for="floatingInput">Tên hãng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="tenhang_slug" value="{{ $hang->tenhang_slug }}">
                                <label for="floatingInput">Đường dẫn thân thiện</label>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <img style="width:200px;height:auto;" src="{{ asset($hang->hinhanh) }}" alt="">
                                    <input type="hidden" name="hinhanh1" value="{{ $hang->hinhanh }}">
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text w-25" id="basic-addon1">Hình ảnh</span>
                                        <input type="file" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="hinhanh">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-primary py-2 px-5 text-light mt-1 mb-3 float-end" value="sua" name="sua">Lưu</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
@endsection