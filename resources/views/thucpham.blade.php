@extends('index')
@section('content')
<div id="content" class="container">
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
        </div>    
@endsection