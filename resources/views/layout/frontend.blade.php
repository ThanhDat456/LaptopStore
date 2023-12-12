<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/css/cart.css" />

    <title>Display</title>
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
                    <p class="cart">
                        <a href="{{ route('giohang') }}">Giỏ hàng</a><span class="number"><a href="">8</a></span>
                    </p>
                </div>
            </div>
        </div>
        <!-- end wp-header  -->
        <div id="wp-body">
            <div class="content">
                <div class="wp-content">
                    <div class="menu">
                        <ul class="menu-list">
                            <li class="menu-item active"><a href="">Macbook</a></li>
                            <li class="menu-item"><a href="">Asus</a></li>
                            <li class="menu-item"><a href="">MSI</a></li>
                            <li class="menu-item"><a href="">Dell</a></li>
                            <li class="menu-item"><a href="">HP</a></li>
                        </ul>
                    </div>
                    
                    <!-- end menu  -->
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
<script src="public/js/main.js"></script>
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
<script>
    $(document).ready(function() {
        $("#home-slide").carousel({
            indicators: 4000,
            ride: "carousel"
        });
    });
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>