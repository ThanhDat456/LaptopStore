@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Thêm thành viên quản trị</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('user.postthem') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name">
                                <label for="floatingInput">Họ và tên</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="email">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <label for="floatingInput">Mật khẩu</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="floatingInput">Xác nhận password</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25" id="basic-addon1">Phân quyền</span>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="Admintrator">Quản trị viên</option>
                                <option value="subscriber">Khách hàng</option>
                            </select>
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