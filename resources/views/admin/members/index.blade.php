@extends('admin.index')
@section('content')
    <h2 class="text-center" style="margin-bottom: 20px; font-weight: bold">Quản Lý Thành Viên</h2>
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
        <a href="{{Route('member.create')}}" title="" class="btn btn-info" style="margin-bottom:20px; "><i class="fa fa-plus-circle" aria-hidden="true"></i>  Thêm</a>
        <a href="{{Route('admin.member')}}" title="" class="btn btn-danger" style="margin-bottom:20px; ">Xem Tất Cả</a>
    </div>
    <div class="col-md-9">
    	<form action="{{route('member.search')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    		@csrf
    		<button type="submit" class="btn btn-info pull-right" id="btnsearch" name="btnsearch">Search</button>
        	<input type="text" class="form-control pull-right" style="width: 300px;" name="txtsearch" id="txtsearch" value="" placeholder="Enter keyword...">
    	</form>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr >
                <th style="text-align: center" >ID</th>
				<th style="text-align: center" >Tên Thành Viên</th>
				<th style="text-align: center" >Số Điện Thoại</th>
				<th style="text-align: center" >Email </th>
				<th style="text-align: center" >Password</th>
				<th style="text-align: center" >Ngày Tạo</th>
				<th style="text-align: center" >Ngày Sửa</th>
                <th style="text-align: center" colspan="2">Chức Năng</th>

            </tr>
        </thead>
        <tbody>
                  <!-- hien thi du lieu -->
            @forelse($user as $us)
	    	<tr>
	    		<td style="text-align: center">{{$us->id}}</td>
	    		<td style="text-align: center">{{$us->name}}</td>
	    		<td style="text-align: center">{{$us->phone}}</td>
	    		<td style="text-align: center">{{$us->email}}</td>
	    		<td style="text-align: center">{{$us->password}}</td>
	    		<td style="text-align: center">{{$us->created_at}}</td>
	    		<td style="text-align: center">{{$us->updated_at}}</td>
	    		<td style="text-align: center"><a class="btn btn-warning" href="{{route('member.edit',$us->id)}}">Sửa</a></td>
	    		<td style="text-align: center"><a onclick="deleteItem({{$us->id}})" class="deleteAcc btn btn-danger" >Xóa</a></td>
	    	</tr>
		    @empty
		    	<tr>
		    		<td>Khong co du lieu</td>
		    	</tr>
		    @endforelse
	    </tbody>
    </table>
    <div class="col-md-12 text-center">
        <!-- paging -->
        {{$user->links()}}
    </div>
    
	<script type="text/javascript">
		function deleteItem(id) {
			if (confirm("Bạn Có Muốn Xóa Không?")) {
					// window.location.href="";
			}
			
		}
		$(document).ready(function() {
			// $('.deleteAcc').click(function() {
			// 	if (confirm("Bạn Có Muốn Xóa Không?")) {
			// 		window.location.href=""
			// 	}
			// });
		});
	</script>
@endsection