@extends('index')
@section('content')
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
@endsection