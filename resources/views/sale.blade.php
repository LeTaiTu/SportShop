@extends('index')
@section('content')
	<div id="product_frame" class="row">
            <div class="category col-md12">
                <a href="" class="promotion">KHUYẾN MÃI HOT NHẤT</a>
            </div>
            <div class="products col-md-12 col-xs-6">
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

@endsection
