@extends('layout.frontend')
@section('content')
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
    <div class="sidebar-left sidebar-full">

        @foreach($hangsanxuat_slug as $value)
        <div class="wp-product-light">
            <div class="product-light"><span>Sản phẩm hãng: {{$value->tenhang}}</span></div>
            <ul class="list-product">
                @if($value->SanPham->count() > 0)
                @foreach($value->SanPham as $item)
                <li class="product-item">
                    <a href="" class="product-thumb">
                        <img src="{{ url($item->hinhanh) }}" alt="" />
                    </a>
                    <a href="" class="product-name">
                        <p>{{ $item->tensanpham }}</p>
                    </a>
                    <div class="price">Giá bán: <span>{{ number_format($item->dongia,0,'.','.') }}đ</span></div>
                    <a href="{{ route('themgiohang',$item->tensanpham_slug) }}" class="add-cart">Thêm giỏ hàng</a>
                </li>
                @endforeach
                @else
                <p class="text-danger" style="margin-top:60px;margin-left:400px;font-size:18px;">Không còn kinh doanh sản phẩm của hãng.</p>
                @endif
            </ul>
        </div>
        @endforeach

    </div>
</div>
@endsection