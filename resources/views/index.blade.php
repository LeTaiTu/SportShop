<!DOCTYPE html>
<html lang="en">

<head>

    <title> SHOP SPORT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- them thu cong --}}
    <link rel="stylesheet" href="{{asset('asset_admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/font-awesome.min.css')}}">
    {{-- <script src="{{asset('asset_admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset_admin/js/bootstrap.min.js')}}"></script> --}}
    {{-- end manual --}}
    <link rel="stylesheet" href="{{asset('asset_admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('asset_admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/product_details.css')}}">
    <link rel="icon" type="image/png" href="{{asset('asset_admin/images/logo.png')}}">
    
</head>

<body>

    <header id="header">
        <div style="background: #000000;">
            <div class="container top1">
                <a href="{{route('home')}}"><img id="logo" src="{{asset('asset_admin/images/logo.png')}}" alt="logo"></a>
                <form id="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search">
                        <img src="{{asset('asset_admin/images/icon-search.png')}}" alt="">
                    </div>
                </form>
                <div class="hotline">
                    <img src="{{asset('asset_admin/images/icon-phone.png')}}" alt="">
                    <p style="position: absolute; left: 51px; font-size: 14px;">Hotline CSKH</p>
                    <p style="position: absolute; left: 52px; font-size: 16px; top: 16px; font-weight: bold;">1900.1234</p>
                </div>
                <div class="cart">
                    <img src="{{asset('asset_admin/images/icon-cart.png')}}" alt="">
                    <p style="position: absolute; right: 7px; font-size: 14px; border: solid black 1px; border-radius: 15px;">80</p>
                    <p style="position: absolute; left: 52px; font-size: 16px; top: 9px; font-weight: bold;">Giỏ hàng</p>
                </div>
                @if(Auth::guard('users')->check())
                    
                    <a class="login" href="{{route('change_user',Auth::guard('users')->user()->id)}}" style="text-decoration: none;top: 16px;right: 15px;">Xin Chào {{Auth::guard('users')->user()->name}} </a>
                    <div>
                        <a class="login" href="{{route('logout')}}" style="text-decoration: none; top: 43px;right: 15px;"> Đăng Xuất</a>
                    </div>

                @else
                    <a class="login" href="{{route('login.user')}}" style="text-decoration: none;">ĐĂNG NHẬP</a>
                    <a class="register" href="{{route('register.user')}}" style="text-decoration: none;">ĐĂNG KÝ</a>
                @endif
                
                <button id="menu_bar" type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
        <div style="background: #fbdc30;">
            <div class="container top2">
                <div id="myNavbar" class="row">
                    <ul>
                        <li class="active_header"><a href="{{route('home')}}"><img src="{{asset('asset_admin/images/icon-home.png')}}" alt=""> TRANG CHỦ</a></li>
                        <li><a href="{{route('sale')}}"> KHUYẾN MÃI</a></li>
                        <li><a href="{{route('quanao')}}"> QUẦN ÁO , GIẦY</a></li>
                        <li><a href="{{route('phuchoi')}}"> THỰC PHẨM PHỤC HỒI</a></li>
                        <li><a href="{{route('bong')}}"> BÓNG</a></li>
                        <li><a href="{{route('chucnang')}}"> THỰC PHẨM CHỨC NĂNG</a></li>
                        <li><a href="{{route('kinh')}}"> KÍNH BƠI</a></li>
                        <li><a href="{{route('contact')}}">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
@yield('content')

<!-- footer -->
    <footer id="footer">
        <div class="container">
            <div id="ship_hotline_payment" class="row">
                <div class="item col-lg-3 col-lg-offset-2 col-md-4 col-md-offset-1">
                    <img src="{{asset('asset_admin/images/icon-ship.png')}}" alt="">
                    <p class="content">Giao hàng trên Toàn Quốc</p>
                    <p class="note">Giao hàng trên Toàn Quốc</p>
                </div>
                <div class="item col-lg-3 col-md-3 col-md-4">
                    <img src="{{asset('asset_admin/images/icon-hotline.png')}}" alt="">
                    <p class="content">Hotline: 0966142240</p>
                    <p class="note">Hỗ trợ tư vấn 24/7</p>
                </div>
                <div class="item col-lg-3 col-md-3 col-md-4">
                    <img src="{{asset('asset_admin/images/icon-payment.png')}}" alt="">
                    <p class="content">Thanh toán dễ dàng</p>
                    <p class="note">Thanh toán khi nhận hàng</p>
                </div>
            </div>
            <div id="info" class="row">
                <div class="col-md-3 col-md-offset-1">
                    <p class="title">Website cùng hệ thống</p>
                    <p class="text"><a href="">Địa chỉ Email: ttuan0143@gmail.com</a></p>
                    
                    <ul>
                        <li><a href=""><img src="{{asset('asset_admin/images/icon-facebook.png')}}" alt=""></a></li>
                        <li><a href=""><img src="{{asset('asset_admin/images/icon-youtube.png')}}" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="title">Giới thiệu</p>
                    <p class="text"><a href="">Về Shop</a></p>
                    <p class="text"><a href="">Khuyến mãi</a></p>
                    <p class="text"><a href="">Liên hệ</a></p>
                    <p class="text"><a href="">Cam kết sản phẩm chính hãng</a></p>
                </div>
                <div class="col-md-3">
                    <p class="title">Hướng dẫn, hỗ trợ</p>
                    <p class="text"><a href="">Hướng dẫn mua hàng</a></p>
                    <p class="text"><a href="">Vận chuyển - giao hàng</a></p>
                    <p class="text"><a href="">Phương thức thanh toán</a></p>
                    <p class="text"><a href="">Chính sách hỗ trợ</a></p>
                </div>
            </div>
        </div>
        <div id="copyright">
            <p>Bản quyền 2019 thuộc về ITPlus</p>
            
            <p>Địa chỉ: 51 Lê Đại Hành - Hoàn Kiếm - Hà Nội</p>
            <p>Điện thoại/Fax: 19001001</p>
            <p>Người chịu trách nhiệm nội dung: TĐT</p>
        </div>
    </footer>
    <script src="{{asset('asset_admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset_admin/js/app.js')}}"></script>
    {{-- <script src="{{asset('asset_admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset_admin/js/bootstrap.min.js')}}"></script> --}}
</body>

</html>