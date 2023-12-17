@extends('layout.admin')
@section('content')
<div class="row text-center my-3">
    <div class="col-md-3 p-0">
        <div class="card bg-info" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">Doanh số</h5>
                <p class="card-text text-light">{{$count[1]}}0.000 VND</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-0">
        <div class="card bg-danger" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">khách hàng</h5>
                <p class="card-text text-light">{{$count[0]}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-0">
        <div class="card bg-warning" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">Đơn hàng đang xử lý</h5>
                <p class="card-text text-light">{{$count[2]}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-0">
        <div class="card bg-success" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">Đơn hàng thành công </h5>
                <p class="card-text text-light">{{$count[3]}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col-md-12">
        <div class="card">
            @if(session('status'))
            <div class="alert alert-success text-center">
                {{session('status')}}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-center">
                        <h5 class="mt-3">Đơn hàng mới</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Khách hàng</th>
                            <th scope="col">Số điện thoại giao hàng</th>
                            <th scope="col">Địa chỉ giao hàng</th>
                            <th scope="col">Thông tin đơn hàng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ngày đặt hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($donhang->count() >0)
                        @foreach($donhang as $value)
                        <tr class="text-center">
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $value->User->name }}</td>
                            <td style="width:200px;">{{ $value->dienthoaigiaohang }}</td>
                            <td>{{ $value->diachigiaohang }}</td>
                            <td>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">#</th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Đơn giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $tempp = 0
                                        @endphp
                                        @foreach($donhang_chitiet as $item)
                                        @if($item->donhang_id == $value->id)
                                        @php
                                        $tempp++
                                        @endphp
                                        <tr class="text-center">
                                            <td scope="row">{{ $tempp }}</td>
                                            <td style="width:315px;">{{ $item->SanPham->tensanpham }}</td>
                                            <td><img src="{{ url($item->SanPham->hinhanh) }}" style="width:50px;" alt=""></td>
                                            <td>{{ $item->soluongban }}</td>
                                            <td>{{ number_format($item->dongiaban,0,'.','.') }}đ</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <p style="font-weight:600;margin:0;">Tổng tiền:<span style="padding-left:20px;">{{$value->tongtien}}đ</span></p>
                            </td>
                            @if($value->tinhtrang == 1)
                            <td><a href="{{ route('tinhtrang_capnhat',$value->id) }}" class="status-order">Đang xử lý</a></td>
                            @else
                            <td><a href="" class="status-order status-order-success">Giao hàng thành công</a></td>
                            @endif
                            <td>
                                <p>{{$value->created_at}}</p>
                                {{$value->created_at->diffForHumans()}}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7" class="text-center text-danger">Không có đơn hàng mới!</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection