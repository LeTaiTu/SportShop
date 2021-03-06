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
        {{-- san pham khuyen mai --}}
        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="{{route('sale')}}">Sản Phẩm Khuyến Mại</a></li>

                    <li class="show_all"><a href="{{route('sale')}}">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div id="sale" class="products tab-pane fade in active col-md-12 col-xs-12">
                    @forelse($product_sale as $product)
                        @forelse($detail_sale as $detail)
                            @if($product->id == $detail->product_id)
                            @if($detail->original_price - $detail->sell_price > 0)
                                <div class="card col-md-2 col-sm-4 col-xs-6">
                                    
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="sale">
                                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                            <p>GIẢM {{number_format($detail->original_price - $detail->sell_price)}} đ</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ <span class="discount"> - {{number_format($detail->original_price)}} đ</span></b>
                                        </p>
                                    </div>
                                    </a>
                                    
                                </div>
                            @endif
                            @break
                            @endif

                        @empty
                            <p>Không có dữ liệu</p>
                        @endforelse
                    @empty 
                    @endforelse
               
                </div>
            </div>
        </div>
{{-- pro_clothers detail_clother --}}
        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="{{route('quanao')}}">Quần Áo</a></li>

                    <li class="show_all"><a href="{{route('quanao')}}">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div id="quanao" class="products tab-pane fade in active col-md-12 col-xs-12">
                    @forelse($pro_clothers as $product)
                        @forelse($detail_clother as $detail)
                            @if($product->id == $detail->product_id)
                                <div class="card col-md-2 col-sm-4 col-xs-6">
                                    @if($detail->original_price - $detail->sell_price > 0)
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="sale">
                                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                            <p>GIẢM {{number_format($detail->original_price - $detail->sell_price)}} đ</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ <span class="discount"> - {{number_format($detail->original_price)}} đ</span></b>
                                        </p>
                                    </div>
                                    </a>
                                    @else
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="new_products">
                                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                            <p>SẢN PHẨM MỚI</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ</b>
                                        </p>
                                    </div>
                                    </a>
                                    @endif
                                </div>
                                @break
                            @endif

                        @empty
                            <p>Không có dữ liệu</p>
                        @endforelse
                    @empty 
                    @endforelse
               
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="{{route('giay')}}">Giầy Thể Thao</a></li>

                    <li class="show_all"><a href="{{route('giay')}}">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div id="giay" class="products tab-pane fade in active col-md-12 col-xs-12">
                    @forelse($pro_shoes as $product)
                        @forelse($detail_shoes as $detail)
                            @if($product->id == $detail->product_id)
                                <div class="card col-md-2 col-sm-4 col-xs-6">
                                    @if($detail->original_price - $detail->sell_price > 0)
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="sale">
                                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                            <p>GIẢM {{number_format($detail->original_price - $detail->sell_price)}} đ</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ <span class="discount"> - {{number_format($detail->original_price)}} đ</span></b>
                                        </p>
                                    </div>
                                    </a>
                                    @else
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="new_products">
                                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                            <p>SẢN PHẨM MỚI</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ</b>
                                        </p>
                                    </div>
                                    </a>
                                    @endif
                                </div>
                                @break
                            @endif

                        @empty
                            <p>Không có dữ liệu</p>
                        @endforelse
                    @empty 
                    @endforelse
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="{{route('thucpham')}}">Thực Phẩm Bổ Sung</a></li>

                    <li class="show_all"><a href="{{route('thucpham')}}">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div id="thucpham" class="products tab-pane fade in active col-md-12 col-xs-12">

                    @forelse($pro_foods as $product)
                        @forelse($detail_food as $detail)
                            @if($product->id == $detail->product_id)
                                <div class="card col-md-2 col-sm-4 col-xs-6">
                                    @if($detail->original_price - $detail->sell_price > 0)
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="sale">
                                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                            <p>GIẢM {{number_format($detail->original_price - $detail->sell_price)}} đ</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ <span class="discount"> - {{number_format($detail->original_price)}} đ</span></b>
                                        </p>
                                    </div>
                                    </a>
                                    @else
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="new_products" >
                                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                            <p>SẢN PHẨM MỚI</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ</b>
                                        </p>
                                    </div>
                                    </a>
                                    @endif
                                </div>
                                @break
                            @endif

                        @empty
                            <p>Không có dữ liệu</p>
                        @endforelse
                    @empty 
                    @endforelse
               
                </div>
            </div>
        </div>

        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="{{route('phukien')}}">Phụ Kiện Thể Thao</a></li>

                    <li class="show_all"><a href="{{route('phukien')}}">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div id="phukien" class="products tab-pane fade in active col-md-12 col-xs-12">
                    @forelse($pro_accessories as $product)
                        @forelse($detail_accessories as $detail)
                            @if($product->id == $detail->product_id)
                                <div class="card col-md-2 col-sm-4 col-xs-6">
                                    @if($detail->original_price - $detail->sell_price > 0)
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="sale">
                                            <img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="">
                                            <p>GIẢM {{number_format($detail->original_price - $detail->sell_price)}} đ</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ <span class="discount"> - {{number_format($detail->original_price)}} đ</span></b>
                                        </p>
                                    </div>
                                    </a>
                                    @else
                                    <a href="{{route('detail.product', [$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
                                    <div class="card_img">
                                        <img src="{{asset('storage/product/'.$product->image)}}">
                                        <div class="new_products">
                                            <img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="">
                                            <p>SẢN PHẨM MỚI</p>
                                        </div>
                                    </div>
                                    <div class="card_text row" style="font-size: 16px; margin-bottom: 5px;margin-top: 5px">
                                        <p>{{$product->name_pro}}</p>
                                    </div>
                                    <div class="card_text row">
                                        <p style="margin-bottom: 10px;">Giá
                                        <b class="price">{{number_format($detail->sell_price)}} đ</b>
                                        </p>
                                    </div>
                                    </a>
                                    @endif
                                </div>
                            @endif
                        @empty
                            <p>Không có dữ liệu</p>
                        @endforelse
                    @empty 
                    @endforelse
               
                </div>
            </div>
        </div>
        
    </div>
@endsection