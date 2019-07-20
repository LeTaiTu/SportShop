@extends('index')
@section('content')
	<div id="cart_frame" class="container">
        <div class="row">
            <form action="" method="POST">
            	@csrf
                <div class="info_cart col-md-8">
                    <p class="cart_title" style="font-weight: bold;">Thông tin người mua hàng</p>

                    <div class="col-md-12">
                        <p class="customer_please">Để O2TV xử lý hàng nhanh hơn, Quý khách vui lòng ghi chính xác địa
                            chỉ cần giao</p>
                        <div class="item_form form-group">
                            <div class="row">
                                <div class="col-xs-3">Họ Tên <span class="required">(*)</span></div>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="name" value="@if(Auth::guard('users')->check()){{Auth::guard('users')->user()->name}} @endif" placeholder="Nhập họ tên.">
                                </div>
                            </div>
                        </div>
                        <div class="item_form form-group">
                            <div class="row">
                                <div class="col-xs-3">Điện Thoại <span class="required">(*)</span></div>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="phone" value="@if(Auth::guard('users')->check()){{Auth::guard('users')->user()->phone}} @endif" placeholder="Nhập số điện thoại.">
                                </div>
                            </div>
                        </div>
                        
                        <div class="item_form form-group">
                            <div class="row">
                                <div class="col-xs-3">Địa Chỉ <span class="required">(*)</span></div>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="address_details" placeholder="Nhập địa chỉ chi tiết.">
                                </div>
                            </div>
                        </div>
                        <div class="item_form form-group">
                            <div class="row">
                                <div class="save_address col-xs-12">
                                    <input type="checkbox">
                                    <p>Lưu thông tin địa chỉ</p>
                                </div>
                            </div>
                        </div>
                        <div class="item_form form-group">
                            <div class="row">
                                <div class="col-xs-3">Lời nhắn: <span style="font-size: 12px; color: #797979;">(Không
                                        bắt buộc)</span></div>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="address_details" placeholder="Ví dụ: giao hàng ngoài giờ hành chính">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="cart_title">Thời gian giao hàng dự kiến</p>
                    <div class="col-md-12">
                        <p class="note_ship" style="color: black;">Miễn phí giao hàng đến hết năm 2019 </p>
                    </div>
                </div>
                <div class="payment col-md-4" style="padding-bottom: 80px;">
                    <p class="payment_title">Giỏ hàng của bạn</p>
                    <p>Thanh tiền: <span>@if(Session::has('cart')){{number_format(Session('cart')->totalPrice + Session('cart')->totalPricePromotion)}}
                                @else 0
                                @endif đ</span></p>
                    <p>Giảm: <span>- @if(Session::has('cart')){{number_format(Session('cart')->totalPricePromotion)}}
                                @else 0
                                @endif đ</span></p>
                    <p>Phí vận chuyển: <span>0 đ</span></p>
                    <p class="total">Cần thanh toán: <span class="amount">@if(Session::has('cart')){{number_format(Session('cart')->totalPrice)}}
                                @else 0
                                @endif đ</span></p>
                    <p class="cart_title" style="font-weight: bold;">Phương thức thanh toán</p>
                    <div class="payment_method col-md-12">
                        <div class="icon col-md-3" style="padding-left: 0px;">
                            <input type="radio" name="payment_method" checked>
                            <img src="{{asset('asset_admin/images/icon-thanh-toan-khi-nhan-hang.png')}}" alt="">
                        </div>
                        <div class="col-md-9" style="padding: 0;">
                            <p>Thanh toán khi nhận hàng</p>
                            <span style="position: relative;">Quý khách sẽ thanh toán bằng tiền mặt hoặc thẻ khi O2TV
                                giao hàng cho quý khách.</span>
                        </div>
                    </div>
                    
                    <button type="submit" class="select_payment_method" data-toggle="modal" data-target="#myModal">Đặt Hàng
                        <img src="{{asset('asset_admin/images/icon-proceed-to-payment.png')}}" alt=""></button>
                </div>
            </form>
        </div>
    </div>
@endsection