@extends('layout.frontend')
@section('content')
<div id="sidebar-payment">
    <div class="sidebar-left">
        <form action="{{ route('khachhang.dathang') }}" class="payment" method="post">
            @csrf
            <div class="group">
                <label for="">Số điện thoại <span>*</span></label>
                <input class="form-control @error('dienthoaigiaohang') is-invalid @enderror" type="text" name="dienthoaigiaohang">
                @error('dienthoaigiaohang')
                <div class="invalid-feedback "><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="group">
                <label for="">Địa chỉ nhận hàng <span>*</span></label>
                <input class="form-control @error('diachigiaohang') is-invalid @enderror" type="text" id="diachigiaohang" name="diachigiaohang">
                @error('diachigiaohang')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="action">
                <button type="submit" class="btn btn-success mt-3">Đặt hàng</button>
            </div>
        </form>
    </div>
    <div class="sidebar-right">
        <div class="your-cart">Thanh toán</div>
        <table class="table">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach(Cart::content() as $row)
                <tr class="text-center">
                    <td>{{ $row->name }}</td>
                    <td><img src="{{ url($row->options->image) }}" alt="" style="width:80px;"></td>
                    <td>{{ number_format($row->price,0,'.','.') }}đ</td>
                    <td style="width:100px;">{{ $row->qty }}</td>
                    <td style="width:115px;">{{ $row->subtotal() }}đ</td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <div id="total">
            <span>Tổng tiền:</span>{{Cart::priceTotal()}}đ
        </div>
    </div>
</div>
@endsection