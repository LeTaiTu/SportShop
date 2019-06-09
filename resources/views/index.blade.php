<!DOCTYPE html>
<html lang="en">

<head>
    <title>SHOP SPORT</title>
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
    <link rel="stylesheet" type="text/css" href="">
</head>

<body>

    <header id="header">
        <div style="background: #000000;">
            <div class="container top1">
                <a href=""><img id="logo" src="{{asset('asset_admin/images/logo.png')}}" alt="logo"></a>
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
                <a class="login" href="" style="text-decoration: none;">ĐĂNG NHẬP</a>
                <a class="register" href="" style="text-decoration: none;">ĐĂNG KÝ</a>
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
                        <li class="active_header"><a href=""><img src="{{asset('asset_admin/images/icon-home.png')}}" alt=""> TRANG CHỦ</a></li>
                        <li><a href=""> KHUYẾN MÃI</a></li>
                        <li><a href=""> QUẦN,ÁO,GIÀY...</a></li>
                        <li><a href=""> THỰC PHẨM PHỤC HỒI</a></li>
                        <li><a href=""> BÓNG</a></li>
                        <li><a href=""> THỰC PHẨM CHỨC NĂNG</a></li>
                        <li><a href=""> KÍNH BƠI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
<!-- content -->
    <div id="content" class="container">
        <!-- banner 1 -->
        <div class="row">
            <div id="slide_index" class="col-md-8">
                <div id="myCarousel" class="row carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('asset_admin/images/banner1.jpg')}}" alt="slide">
                        </div>

                        <div class="item">
                            <img src="{{asset('asset_admin/images/banner2.jpg')}}" alt="slide">
                        </div>

                        <div class="item">
                            <img src="{{asset('asset_admin/images/banner3.jpg')}}" alt="slide">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="images_slide_index" class="col-md-4">
                <div class="row">
                    <div class="image col-md-12">
                        <img src="{{asset('asset_admin/images/banner1.jpg')}}" alt="image slide">
                    </div>
                </div>
                <div class="row">
                    <div class="image col-md-12">
                        <img src="{{asset('asset_admin/images/banner2.jpg')}}" alt="image slide">
                    </div>
                </div>
            </div>
        </div>
        <!-- banner 2 -->
        <div id="banner" class="row">
            <img src="{{asset('asset_admin/images/banner6.jpg')}}" alt="" width="100%" height="70">
        </div>
        <!-- content yeild -->
        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <a href="" class="promotion">KHUYẾN MÃI HOT NHẤT</a>
            </div>
            <div class="products col-md-12 col-xs-12">
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/ao1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Giá</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/ao1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Giá</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/ao1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Giá</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/ao1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Giá</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/ao1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Giá</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="#aococ">ÁO CỘC TAY</a></li>
                    <li><a data-toggle="pill" href="#ao">ÁO REALMARID</a></li>
                    <li><a data-toggle="pill" href="#binhnuoc">BÌNH NƯỚC</a></li>
                    <li><a data-toggle="pill" href="#giay">GIÀY</a></li>
                    <li><a data-toggle="pill" href="#tat">TẤT</a></li>
                    <li class="show_all"><a href="">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="aococ" class="products tab-pane fade in active col-md-12 col-xs-12">
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>


                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao2.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                </div>
                <div id="ao" class="products tab-pane fade col-md-12 col-xs-12">
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ao3.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                </div>
                <div id="binhnuoc" class="products tab-pane fade col-md-12 col-xs-12">
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/binhnuoc1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                </div>
                <div id="giay" class="products tab-pane fade col-md-12 col-xs-12">
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/giay1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                </div>
                <div id="tat" class="products tab-pane fade col-md-12 col-xs-12">
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/tat1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            
                            <p style="margin-bottom: 10px;">Giá</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="#douong">ĐỒ UỐNG PHỤC HỒI THỂ LỰC</a></li>
                    <li><a data-toggle="pill" href="#cachua">HOA QUẢ TỐT CHO MÁU</a></li>
                    <li class="show_all"><a href="">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="douong" class="products tab-pane fade in active col-md-12 col-xs-12">
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/thucpham1.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Thực phẩm</p>
                            <p style="margin-bottom: 10px;">Mua 2 tặng</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                </div>
                <div id="cachua" class="products tab-pane fade col-md-12 col-xs-12">
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="sale">
                                <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                <p>GIẢM 10.000 đ</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                    <div class="card col-md-2 col-sm-4 col-xs-6">
                        <div class="card_img">
                            <img src="{{asset('asset_admin/images/ca-chua.jpg')}}">
                            <div class="new_products">
                                <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                <p>SẢN PHẨM MỚI</p>
                            </div>
                        </div>
                        <div class="card_text row">
                            <p>Cà Chua</p>
                            <p style="margin-bottom: 10px;">Hoàn toàn tự nhiên</p>
                            <b class="price">12.500 đ</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a href="">BÓNG</a></li>
                    <li class="show_all"><a href="">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="products col-md-12 col-xs-12">
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/bong1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Bóng chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a href="">THỰC PHẨM CHỨC NĂNG</a></li>
                    <li class="show_all"><a href="">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="products col-md-12 col-xs-12">
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-matcha.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-matcha.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-matcha.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-matcha.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-matcha.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-slimming-plus.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-slimming-plus.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-slimming-plus.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-slimming-plus.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/tra-giam-can-slimming-plus.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        
                        <p style="margin-bottom: 10px;">Trà giảm cân</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a href="">KÍNH BƠI</a></li>
                    <li class="show_all"><a href="">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="products col-md-12 col-xs-12">
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="sale">
                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                            <p>GIẢM 10.000 đ</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">40.000 đ <span class="discount"> - 50.000 đ</span></b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
                <div class="card col-md-2 col-sm-4 col-xs-6">
                    <div class="card_img">
                        <img src="{{asset('asset_admin/images/kinh1.jpg')}}">
                        <div class="new_products">
                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                            <p>SẢN PHẨM MỚI</p>
                        </div>
                    </div>
                    <div class="card_text row">
                        <p>1 Đổi 1 trong vòng 1 tháng</p>
                        <p style="margin-bottom: 10px;">Kính bơi chất lượng cao</p>
                        <b class="price">12.500 đ</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <p>Bản quyền 2018 thuộc về ATAT</p>
            <p>Cơ quan chủ quản: Trường cao đẳng nghề bách khoa Hà Nội</p>
            <p>Địa chỉ: 92A Lê Thanh Nghị - Hai Bà Trưng - Hà Nội</p>
            <p>Điện thoại/Fax: 0966142240</p>
            <p>Người chịu trách nhiệm nội dung: ATAT</p>
        </div>
    </footer>
    <script src="{{asset('asset_admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset_admin/js/app.js')}}"></script>
</body>

</html>