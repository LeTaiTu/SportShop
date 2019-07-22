@extends('admin.index')
@section('content')
    <h2 class="text-center" style="margin-bottom: 20px; font-weight: bold">Yêu Cầu Đặt Hàng</h2>
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
        
        <a href="{{Route('admin.order')}}" title="" class="btn btn-danger" style="margin-bottom:20px; ">Xem Tất Cả</a>
    </div>
    <div class="col-md-9">
    	<form action="{{route('order.search')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    		@csrf
    		<button type="submit" class="btn btn-info pull-right" id="btnsearch" name="btnsearch">Search</button>
        	<input type="text" class="form-control pull-right" style="width: 300px;" name="txtsearch" id="txtsearch" value="" placeholder="Enter keyword...">
    	</form>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr >
                <th style="text-align: center" >ID</th>
				<th style="text-align: center" >Họ Tên</th>
				<th style="text-align: center" >Điện Thoại</th>
				<th style="text-align: center" >Địa Chỉ</th>
				<th style="text-align: center" >Lời Nhắn</th>
				<th style="text-align: center" >Tổng Tiền</th>
				<th style="text-align: center" >Ngày Tạo</th>
                <th style="text-align: center" colspan="2">Chức Năng</th>

            </tr>
        </thead>
        <tbody>
                  <!-- hien thi du lieu -->
            @forelse($slide as $sl)
	    	<tr>
	    		<td style="text-align: center">{{$sl->id}}</td>
	    		<td style="text-align: center">{{$sl->name_slide}}</td>
	    		<td style="text-align: center">{{$sl->id_kind}}</td>
	    		<td style="text-align: center">{{$sl->id_details}}</td>
	    		{{-- <td style="text-align: center">{{$sl->first_pic}}</td> --}}
	    		<td style="text-align: center"><img src="{{asset('/storage/slide/'.$sl->image)}} " width="80"></td>
	    		<td style="text-align: center">{{$sl->created_at}}</td>
	    		<td style="text-align: center">{{$sl->updated_at}}</td>
	    		<td style="text-align: center"><a class="btn btn-warning" href="{{route('order.detail',$sl->id)}}">Chi Tiết</a></td>
	    		<td style="text-align: center"><a class="deleteItem btn btn-danger" href="{{route('order.delete',$sl->id)}}">Xóa</a></td>
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
        {{$slide->links()}}
    </div>
	<script type="text/javascript">
		 $(document).ready(function() {
            $('.deleteItem').click(function(e) {
                
                if (confirm("Bạn Có Muốn Xóa Không?")) {
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