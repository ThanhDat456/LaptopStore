@extends('layout.frontend')
@section('content')
<div class="carousel slide carousel-fade mt-2" id="home-slide">
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
@if (session()->has('status'))
<div class="alert alert-success text-center">
    <i class="bi bi-check-circle" style="font-size:35px;"></i>{{ session()->get('status') }}
</div>
@endif
<div class="owl-carousel owl-theme my-2">
    @foreach($hangsanxuat as $value)
    <div class="item">
        <div class="box">
        <a href="{{ route('hangsanxuat.client',['slug'=>$value->tenhang_slug]) }}" class="box-item">{{ $value->tenhang }}</a>
        </div>
    </div>
    @endforeach
</div>
<div id="sidebar">
    <div class="sidebar-left">
        <div class="wp-product-light">
            <div class="product-light"><span>Sản phẩm mới</span></div>
            <ul class="list-product">
                @foreach($sanphammoi->take(6) as $value)
                <li class="product-item">
                    <a href="" class="product-thumb">
                        <img src="{{ url($value->hinhanh) }}" alt="" />
                    </a>
                    <a href="" class="product-name">
                        <p>{{ $value->tensanpham }}</p>
                    </a>
                    <div class="price">Giá bán: <span>{{ number_format($value->dongia,0,'.','.') }}đ</span></div>
                    <a href="{{ route('themgiohang',$value->tensanpham_slug) }}" class="add-cart">Thêm giỏ hàng</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="wp-product-light">
            <div class="product-light"><span>Sản phẩm</span></div>
            {!! $sanpham->links() !!}
            <ul class="list-product">
                @foreach($sanpham as $value)
                <li class="product-item">
                    <a href="" class="product-thumb">
                        <img src="{{ url($value->hinhanh) }}" alt="" />
                    </a>
                    <a href="" class="product-name">
                        <p>{{ $value->tensanpham }}</p>
                    </a>
                    <div class="price">Giá bán: <span>{{ number_format($value->dongia,0,'.','.') }}đ</span></div>
                    <a href="{{ route('themgiohang',$value->tensanpham_slug) }}" class="add-cart">Thêm giỏ hàng</a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
    <div class="sidebar-right">
        <a href="" class="layer-11">
            <img src="public/images/Layer 11.png" alt="" />
        </a>
        <a href="" class="layer-13">
            <img src="public/images/Layer 13.png" alt="" />
        </a>
    </div>
</div>
@endsection