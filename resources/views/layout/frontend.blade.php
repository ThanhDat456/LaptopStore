<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/css/cart.css" />
    <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="public/OwlCarousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/OwlCarousel2/assets/owl.theme.default.min.css">
    <script src="public/js/main.js"></script>
    <script src="public/OwlCarousel2/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>LaptopStore</title>
</head>

<body>
    <div id="wp-warpper">
        <div id="wp-header">
            <div class="content">
                <div class="ct-header">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="public/images/logo.png" alt="" class="img" />
                    </a>
                    <div class="search">
                        <input type="text" class="font" placeholder="Tìm Kiếm" />
                        <input type="submit" class="submit" value="Tìm kiếm" />
                    </div>
                    <div class="user-login">
                        <div class="user-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="username-login">
                            @if(Auth::user())
                            <span>Xin chào</span>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-size:13px;"href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(Auth::user())
                                {{ Auth::user()->username }}
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="color:#000;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            @else
                            <a href="{{ route('login') }}">
                                <span>Xin chào</span>
                                <p class="user-name">
                                    @if(Auth::user())
                                    {{ Auth::user()->username }}
                                    @else
                                    Khách hàng
                                    @endif
                                </p>
                            </a>
                            @endif
                        </div>
                    </div>
                    <p class="cart">
                        <a href="{{ route('giohang') }}">Giỏ hàng</a><span class="number"><a href="">{{ Cart::count() ?? 0 }}</a></span>
                    </p>
                </div>
            </div>
        </div>
        <!-- end wp-header  -->
        <div id="wp-body">
            <div class="content">
                <div class="wp-content">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end wp-body  -->
        <div id="wp-info">
            <div class="info">
                <div class="info-1">
                    <a href="" class="info-thumb">
                        <img src="public/images/LOGO_1.png" alt="" />
                    </a>
                    <p class="title-1">
                        LaptopStore thành lập năm 2023. Chúng tôi mong rằng sẽ tạo ra một dịch vụ để phục vụ quý khách hàng
                    </p>
                </div>
                <div class="info-2">
                    <div class="info-address">
                        <p>Địa chỉ</p>
                    </div>
                    <p class="title-2">Trường Đại Học An Giang</p>
                    <p class="title-3">Số 18, Ung Văn Khiêm, Phường Mỹ Xuyên, Thành Phố Long Xuyên, An Giang</p>
                </div>
                <div class="info-2">
                    <div class="info-address">
                        <p>Dịch vụ</p>
                    </div>
                    <p class="title-2">Bảo hành rơi vỡ, ngấm nước Care Diamond</p>
                    <p class="title-3">Bảo hành Care X60 rơi vỡ ngấm nước vẫn đổi mới</p>
                </div>
                <div class="info-2">
                    <div class="info-address">
                        <p>Hotline</p>
                    </div>
                    <p class="title-2">Phone Sale: (+84) 0988 550 553</p>
                    <p class="title-3">Email: laptopstore@gmail.com</p>
                </div>
            </div>
        </div>
        <div id="wp-footer">
            <div class="content">
                <p>
                    2023 <ion-icon name="reload-circle-outline"></ion-icon>Copyright LaptopStore
                </p>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $("#home-slide").carousel({
            indicators: 4000,
            ride: "carousel"
        });
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 10
            },
            1000: {
                items: 10
            }
        }
    })
</script>

<script>
    $(document).ready(function() {
        $(".menu-list .menu-item a").click(function() {
            $("a").removeClass("active");
            $(this).toggleClass("active");
            // alert('ok');
            return false;
        });
    });
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>