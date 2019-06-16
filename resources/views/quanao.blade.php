@extends('index')
@section('content')
<div id="content" class="container">
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
    </div>    
@endsection