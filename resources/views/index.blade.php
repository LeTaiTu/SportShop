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

    <link rel="stylesheet" href="{{asset('asset_admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('asset_admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('asset_admin/css/product_details.css')}}">
    <link rel="icon" type="image/png" href="{{asset('asset_admin/images/logo.png')}}">
    {{-- contact --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'> --}}
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
                    <p style="position: absolute; right: 7px; font-size: 14px; border: solid black 1px; border-radius: 15px;">88</p>
                    <p style="position: absolute; left: 52px; font-size: 16px; top: 9px; font-weight: bold;">Giỏ hàng</p>
                </div>
                <a class="login" href="{{route('login')}}" style="text-decoration: none;">ĐĂNG NHẬP</a>
                <a class="register" href="{{route('register')}}" style="text-decoration: none;">ĐĂNG KÝ</a>
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
                        <li><a href="{{route('quanao')}}"> QUẦN,ÁO,GIÀY...</a></li>
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
            <p>Bản quyền 2018 thuộc về ITPlus</p>
            
            <p>Địa chỉ: 51 Lê Đại Hành - Hoàn Kiếm - Hà Nội</p>
            <p>Điện thoại/Fax: 0966142240</p>
            <p>Người chịu trách nhiệm nội dung: TĐT</p>
        </div>
    </footer>
    <script src="{{asset('asset_admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset_admin/js/app.js')}}"></script>
    {{-- contact --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    <script src="contact.js"></script> --}}
</body>

</html>