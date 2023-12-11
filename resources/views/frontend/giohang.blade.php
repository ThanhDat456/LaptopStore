@extends('layout.frontend')
@section('content')
<div id="sidebar-cart">
    <div class="your-cart">Giỏ hàng của bạn</div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td class="text-center">
                    <button type="button" class="btn btn-info"><a href="" style="color:#ffffff;text-decoration:none;">Xóa</a></button>
                </td>
            </tr>
    
        </tbody>
    </table>
    <div class="action">
        <button type="button" class="btn btn-danger"><a href="" style="color:#ffffff;text-decoration:none;">Xóa tất cả</a></button>
        <button type="button" class="btn btn-secondary"><a href="" style="color:#ffffff;text-decoration:none;">Cập nhật</a></button>
        <button type="button" class="btn btn-primary"><a href="{{ route('thanhtoan') }}" style="color:#ffffff;text-decoration:none;">Thanh toán</a></button>
    </div>
</div>
@endsection