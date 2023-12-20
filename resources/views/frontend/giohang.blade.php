@extends('layout.frontend')
@section('content')
<div id="sidebar-cart">
    @if(session('status'))
    <div class="alert alert-success text-center">
    <i class="bi bi-check-circle" style="font-size:35px;"></i>{{session()->get('status')}}
    </div>
    @endif
    <div class="your-cart mt-3">Giỏ hàng của bạn</div>
    <form action="{{ route('giohang.capnhat') }}" method="post">
        @csrf
        @if(Cart::count() > 0)
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach(Cart::content() as $row)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->name }}</td>
                    <td><img style="width:50px;" src="{{ url($row->options->image) }}" alt=""></td>
                    <td>{{ number_format($row->price,0,'.','.') }}đ</td>
                    <td>
                        <a href="{{ route('giohang.giam',['rowId'=>$row->rowId]) }}" class="mins"><i class="bi bi-dash"></i></a>
                        <input type="text" class="qty" name="qty[{{$row->rowId}}]" value="{{$row->qty}}">
                        <a href="{{ route('giohang.tang',['rowId'=>$row->rowId]) }}" class="plus"><i class="bi bi-plus-lg"></i></a>
                    </td>
                    <td>{{ number_format($row->subtotal,0,'.','.') }}đ</td>
                    <td class="text-center">
                        <a href="{{ route('giohang.xoa',['rowId' => $row->rowId]) }}" class="delete-cart">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="empty-cart mb-3" style="height:220px;border:1px solid #ddd;display:grid;place-items:center;border-radius:10px;">
            <i class="bi bi-basket3" style="font-size: 75px;margin-right: 15px;color: #c88383;"></i><span style="color:#000;font-weight:500">Không có sản phẩm trong giỏ hàng!</span>
        </div>
        @endif
        <div class="total text-right my-3">
            <span style="font-weight:600;padding-right:10px;">Tổng tiền:</span>{{Cart::priceTotal()}}đ
        </div>
        <div class="action">
            <button type="button" class="btn btn-danger"><a href="{{ route('giohang.tatca') }}" style="color:#ffffff;text-decoration:none;">Xóa tất cả</a></button>
            <button type="submit" class="btn btn-secondary" name="capnhat"><a style="color:#ffffff;text-decoration:none;">Cập nhật</a></button>
            <button type="button" class="btn btn-primary"><a href="{{ route('thanhtoan') }}" style="color:#ffffff;text-decoration:none;">Thanh toán</a></button>
        </div>
    </form>
</div>
@endsection