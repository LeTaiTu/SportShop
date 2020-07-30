@extends('index')
@section('content')
<div id="content" class="container">
	{{-- san pham khuyen mai --}}
        <div id="product_frame" class="row">
            <div class="category col-md-12">
                <ul>
                    <li class="active"><a data-toggle="pill" href="{{route('sale')}}">Sản Phẩm Khuyến Mại</a></li>
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
</div>
@endsection
