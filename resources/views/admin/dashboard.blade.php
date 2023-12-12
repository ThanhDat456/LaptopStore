@extends('layout.admin')
@section('content')
<div class="row text-center my-3">
    <div class="col-md-3 p-0">
        <div class="card bg-info" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">Doanh số</h5>
                <p class="card-text text-light">1.250.000 VND</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-0">
        <div class="card bg-danger" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">Đơn hàng mới</h5>
                <p class="card-text text-light">1000</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-0">
        <div class="card bg-warning" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">Đơn hàng đang giao</h5>
                <p class="card-text text-light">99</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-0">
        <div class="card bg-success" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light">Đơn hàng thành công </h5>
                <p class="card-text text-light">50</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-head text-center">
                <h5 class="mt-3">Đơn hàng mới</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection