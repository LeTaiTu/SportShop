@extends('index')
@section('content')
	<div id="cart_frame" class="container">
        <div class="row">
            <div class="info_cart col-md-8">
                <p class="cart_title">GIỎ HÀNG <span>(@if(Session::has('cart')){{Session('cart')->totalQty}}@endif sản phẩm)</span></p>
                {{-- @dd(Session('cart')->items); --}}
                
                @forelse(Session('cart')->items as $it)

                <div class="item_cart row">
                    <div class="col-md-2">
                        <img class="img" src="{{asset('storage/product/'.$it['image'])}}" alt="">
                    </div>
                    <div class=" col-md-3" style="font-size: 20px;">
                        <p>{{$it['name']}}</p>
                        
                        
                                <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hủy</button>
                        
                    </div>
                    <div class="col-md-2">
                        <p class="cart_price" style="font-size: 20px">Size {{$it['size']}} </p>
                    </div>
                    <div class="col-md-2">
                        <p class="cart_price" style="font-size: 20px">Số Lượng {{number_format($it['qty'])}} X </p>
                    </div>
                    <div class="col-md-3">
                        <p class="cart_price">{{number_format($it['price'])}} đ</p>
                        <p class="cart_discount">{{number_format($it['ori_price'])}} đ</p>
                    </div>
                </div>
                @empty
                Chưa có giỏ hàng nào.
                @endforelse 
            </div>
            <div class="payment col-md-4">
                <p class="payment_title">Giỏ hàng của bạn</p>
                <p>Thanh tiền: <span>{{number_format(Session('cart')->totalPrice + Session('cart')->totalPricePromotion)}} đ</span></p>
                <p>Giảm: <span>- {{number_format(Session('cart')->totalPricePromotion)}} đ</span></p>
                <hr>
                <p class="total">Tổng tiền đơn hàng: <span class="amount">{{number_format(Session('cart')->totalPrice)}} đ</span></p>
                <p class="use_discount_code">Sử dụng mã giảm giá</p>
                <form action="" method="POST">
                    <input class="txt_discount_code form-control" type="text" placeholder="Nhập mã giảm giá">
                    <button class="apply" type="button">Áp dụng</button>
                    <button class="proceed_to_payment">Tiến hành thanh toán <img src="images/icon-proceed-to-payment.png"
                            alt=""></button>
                </form>
            </div>
        </div>
    </div>
@endsection