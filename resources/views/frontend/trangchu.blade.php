@extends('layout.frontend')
@section('content')
<div class="carousel slide carousel-fade" id="home-slide">
    <ol class="carousel-indicators">
        <li data-target="#home-slide" class="update active" data-slide-to="0"></li>
        <li data-target="#home-slide" class="update" data-slide-to="1"></li>
        <li data-target="#home-slide" class="update" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="3000">
            <img style="height:350px;" src="public/images/Layer 6.jpg" alt="" class="d-block w-100" />
        </div>
        <div class="carousel-item" data-interval="3000">
            <img style="height:350px;" src="public/images/Layer 3.jpg" alt="" class="d-block w-100" />
        </div>
        <div class="carousel-item" data-interval="3000">
            <img style="height:350px;" src="public/images/Layer 4.jpg" alt="" class="d-block w-100" />
        </div>
    </div>
</div>
<div id="sidebar">
    <div class="sidebar-left">
        <div class="wp-product-light">
            <div class="product-light"><span>Sản phẩm mới</span></div>
            <ul class="list-product">
                <li class="product-item">
                    <a href="" class="product-thumb">
                        <img src="public/images/img.png" alt="" />
                    </a>
                    <a href="" class="product-name">
                        <p>iPhone Xs Max 2 slim - 256GB</p>
                    </a>
                    <div class="price">Giá bán: <span>32.990.000đ</span></div>
                    <button type="submit">Thêm giỏ hàng</button>
                </li>
            </ul>
        </div>
        <div class="wp-product-light">
            <div class="product-light"><span>Sản phẩm</span></div>
            <ul class="list-product">
                <li class="product-item">
                    <a href="" class="product-thumb">
                        <img src="public/images/img.png" alt="" />
                    </a>
                    <a href="" class="product-name">
                        <p>iPhone Xs Max 2 slim - 256GB</p>
                    </a>
                    <div class="price">Giá bán: <span>32.990.000đ</span></div>
                    <button type="submit">Thêm giỏ hàng</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-right">
        <a href="" class="layer-8">
            <img src="public/images/Layer 8.png" alt="" />
        </a>
        <a href="" class="layer-9">
            <img src="public/images/Layer 9.png" alt="" />
        </a>
        <a href="" class="layer-10">
            <img src="public/images/Layer 10.png" alt="" />
        </a>
        <a href="" class="layer-11">
            <img src="public/images/Layer 11.png" alt="" />
        </a>
        <a href="" class="layer-12">
            <img src="public/images/Layer 12.png" alt="" />
        </a>
        <a href="" class="layer-13">
            <img src="public/images/Layer 13.png" alt="" />
        </a>
    </div>
</div>
@endsection