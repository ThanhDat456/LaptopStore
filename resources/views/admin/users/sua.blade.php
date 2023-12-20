@extends('layout.admin')
@section('content')
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Cập nhật thông tin</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('user.postsua',$user->id) }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name" value="{{ $user->name }}">
                                <label for="floatingInput">Họ và tên</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="email" value="{{ $user->email }}">
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25" id="basic-addon1">Phân quyền</span>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="Admintrator" {{ ($user->role == 'Admintrator') ? 'selected' : '' }}>Quản trị viên</option>
                                <option value="subscriber" {{ ($user->role == 'subscriber') ? 'selected' : '' }}>Khách hàng</option>
                            </select>
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