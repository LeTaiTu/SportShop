@extends('index')
@section('content')
	@if(session()->has("success"))
		<div class="alert alert-success">
		    <ul>
		        <li>{{session("success")}}</li>
		    </ul>
		</div>
	@endif
	@if(session()->has("error"))
	    <div class="alert alert-danger">
	        <ul>
	            <li>{{session("error")}}</li>
	        </ul>
	    </div>
    @endif
	{{-- hien thi loi --}}
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				{{-- trong laravel dung {{thay cho echo}} --}}
				<li>{{$error}}</li> 
				@endforeach
			</ul>
		</div>
	@endif
<div id="content_product_details" class="container">
	<form action="{{route('detail.product',[$product->id,$get_size])}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    @csrf
	<div class="wrapper row">
		<div class="preview col-md-3">

			<div class="preview-pic tab-content">
				<div class="tab-pane active" id="a1"><img src="{{asset('storage/product/'.$product->image)}}" width="100%" /></div>
				@forelse($slide as $sl)
				<div class="tab-pane " id="{{$sl->id}}"><img src="{{asset('storage/slide/'.$sl->image)}}" width="100%" /></div>
				@empty
				@endforelse
				
			</div>
			<ul class="preview-thumbnail nav nav-tabs">
				<li class="active"><a data-target="#a1" data-toggle="tab">
					<img src="{{asset('storage/product/'.$product->image)}}" width="100%" /></a>
				</li>
				@forelse($slide as $sl)
				
				<li class="{{-- {{$sl->first_pic == 1 ? 'active' : ''}} --}}"><a data-target="#{{$sl->id}}" data-toggle="tab">
					<img src="{{asset('storage/slide/'.$sl->image)}}" width="100%" /></a>
				</li>
				@empty
				@endforelse
				
			</ul>
		</div>
		<div class="details col-md-9">
			<div class="product-title">
				<h3>{{$product->name_pro}}</h3>
				
			</div>
			<div class="rating">
				<div class="stars">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span style="margin-left: 10px; color: #fba502;">5 trên 5 đánh giá</span>
					<span style="margin-left: 10px; color: #797979;">(500 đánh giá)</span>
				</div>
			</div>
			@forelse($product_details as $pdetail)
				@if($pdetail->original_price - $pdetail->sell_price == 0)
					@if($pdetail->size == $get_size)
					<h4 class="price_product_details">{{number_format($pdetail->sell_price)}} đ</h4>
					@endif
				@else
					@if($pdetail->size == $get_size)
					<h4 class="price_product_details">{{number_format($pdetail->sell_price)}} đ<span>{{number_format($pdetail->original_price)}} đ</span></h4>
					@endif
				@endif
			@empty
			@endforelse
			<p class="shipper">Giao hàng bời O2TV</p>
			<p class="time_ship">Thời gian giao hàng từ 1 đến 2 ngày làm việc</p>
			<p class="note_ship">Miễn phí giao hàng khi có đơn hàng từ 500.000 đ trở lên</p>
			
			<h5 class="sizes">
				<ul>
					<span>Phân loại hàng theo loại : </span>
					@forelse($product_details as $pdetail)
						<input type="hidden" value="{{$pdetail->size}}" name="size_type">
						<li ><a style="text-decoration: none" class="size {{$pdetail->size == $get_size ? 'active_size' : ''}}" href="{{route('detail.product',[$product->id, $pdetail->size])}}" >{{$pdetail->size}}</a></li>
					@empty
					@endforelse
				</ul>
			</h5>
			
			<h5 class="quantity">
				<ul>
					<span>Số lượng:</span>
					<li>
						<input class="quantity-minus" style="border-right: none;" type="button" value="-">
						<input type="text" name="quantity" style="width: 50px;" class="quantity" value="1">
						<input class="quantity-plus" style="border-left: none;" type="button" value="+">
					</li>
					
					<li>còn 
					@forelse($product_details as $pdetail)
						@if($pdetail->size == $get_size)
							{{$pdetail->quantity}}
						@endif
					@empty
					@endforelse
					 sản phẩm</li>
					<li><button class="add-to-cart btn btn-default" type="submit"><img src="{{asset('asset_admin/images/icon-add-to-cart.png')}}"
						alt="">THÊM VÀO GIỎ HÀNG</button></li>
				</ul>
			</h5>
			</div>
		</div> {{-- end row --}}
		</form>
	</div>

	<div id="description_product" class="container">
		<p class="title_description_product">Mô tả sản phẩm</p>
		<div style="font-size: 17px" class="content_description_product">{{$product->content}}</div>
		<ul>
			
		</ul>
	</div>

	<div id="similar_products" class="container">
		<p class="title_similar_products">Sản phẩm tương tự</p>
		<div class="similar_products owl-carousel owl-theme">
			@forelse($pro_similar as $product)
                @forelse($details_similar as $detail)
                    @if($product->id == $detail->product_id)
						<div class="item">
							@if($detail->original_price - $detail->sell_price > 0)
							<a href="{{route('detail.product',[$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
							<div class="card">
								<div class="card_img">
									<img src="{{asset('storage/product/'.$product->image)}}">
									<div class="sale" style="left: 0px;">
										<img src="{{asset('asset_admin/images/icon-sale.png')}}" alt="" style="width: 26px;">
										<p>GIẢM {{number_format($detail->original_price - $detail->sell_price)}} đ</p>
									</div>
								</div>
								<div class="card_text row">
									<p>{{$product->name_pro}}</p>
									
									<b class="price">{{number_format($detail->sell_price)}} đ <span class="discount"> - {{number_format($detail->original_price)}} đ</span></b>
								</div>
							</div>
							</a>
							@else
							<a href="{{route('detail.product',[$product->id, $detail->size])}}" style="text-decoration: none" target="blank">
							<div class="card">
								<div class="card_img">
									<img src="{{asset('storage/product/'.$product->image)}}">
									<div class="new_products" style="left: 0px;">
										<img src="{{asset('asset_admin/images/icon-new-product.png')}}" alt="" style="width: 26px;">
										<p>SẢN PHẨM MỚI</p>
									</div>
								</div>
								<div class="card_text row">
									<p>{{$product->name_pro}}</p>
									
									<b class="price">{{number_format($detail->sell_price)}} đ</b>
								</div>
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
@endsection