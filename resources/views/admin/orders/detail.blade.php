@extends('admin.index')
@section('content')
    <h2 class="text-center" style="margin-bottom: 20px; font-weight: bold">Chi Tiết Đặt Hàng</h2>
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
	<div class="col-md-3">
        
        <a href="{{route('order.detail')}}" title="" class="btn btn-danger" style="margin-bottom:20px; ">Xem Tất Cả</a>
        <a href="{{route('admin_order')}}" title="" class="btn btn-info" style="margin-bottom:20px;margin-left: 10px "><i class="fas fa-arrow-alt-from-right"></i> Order</a>
    </div>
    <div class="col-md-9">
    	<form action="{{route('order_detail.search')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    		@csrf
    		<button type="submit" class="btn btn-info pull-right" id="btnsearch" name="btnsearch">Search</button>
        	<input type="text" class="form-control pull-right" style="width: 300px;" name="txtsearch" id="txtsearch" value="" placeholder="Enter Order ID keyword...">
    	</form>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr >
                <th style="text-align: center" >ID</th>
				<th style="text-align: center" >Mã Đơn Hàng</th>
				<th style="text-align: center" >Mã Sản Phẩm</th>
				<th style="text-align: center" >Size/dung lượng</th>
				<th style="text-align: center" >Số Lượng</th>
				<th style="text-align: center" >Giá Tiền</th>
				<th style="text-align: center" >Ngày Tạo</th>
                <th style="text-align: center" colspan="">Chức Năng</th>

            </tr>
        </thead>
        <tbody>
                  <!-- hien thi du lieu -->
            @forelse($order_details as $sl)
	    	<tr>
	    		<td style="text-align: center">{{$sl->id}}</td>
	    		<td style="text-align: center">{{$sl->order_id}}</td>
	    		<td style="text-align: center">{{$sl->product_detail_id}}</td>
	    		<td style="text-align: center">{{$sl->size}}</td>
	    		<td style="text-align: center">{{$sl->quantity}}</td>
	    		<td style="text-align: center">{{$sl->price}}</td>
	    		<td style="text-align: center">{{$sl->created_at}}</td>
	    		<td style="text-align: center"><a class="deleteItem btn btn-danger" href="{{route('order_detail.delete',$sl->id)}}">Hủy</a></td>
	    	</tr>
		    @empty
		    	<tr>
		    		<td>Không Có Dữ Liệu</td>
		    	</tr>
		    @endforelse
	    </tbody>
    </table>
    <div class="col-md-12 text-center">
        <!-- paging -->
        {{$order_details->links()}}
    </div>
	<script type="text/javascript">
		 $(document).ready(function() {
            $('.deleteItem').click(function(e) {
                
                if (confirm("Bạn Có Muốn Hủy Đơn Hàng Không?")) {
                    return true;
                }
                else {
                    e.preventDefault();
                    return false;
                }
            });
        });
	</script>
@endsection