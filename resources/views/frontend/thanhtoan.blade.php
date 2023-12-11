@extends('layout.frontend')
@section('content')
<div id="sidebar-payment">
    <div class="sidebar-left">
        <form action="" class="payment">
            <div class="group">
                <label for="">Số điện thoại <span>*</span></label>
                <input type="text" name="sdt">
            </div>
            <div class="group">
                <label for="">Địa chỉ nhận hàng <span>*</span></label>
                <input type="text" name="diachi">
            </div>
            <div class="action">
                <button type="button" class="btn btn-success mt-3"><a href="" style="color:#ffffff;text-decoration:none;">Đặt hàng</a></button>
            </div>
        </form>
    </div>
    <div class="sidebar-right">
        <div class="your-cart">Thanh toán</div>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection