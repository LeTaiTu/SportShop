@extends('admin.index')
@section('content')
    <h2 class="text-center" style="margin-bottom: 20px; font-weight: bold">Tạo Tài Khoản Quản Trị</h2>
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
        <a href="{{Route('account.create')}}" title="" class="btn btn-info" style="margin-bottom:20px; "><i class="fa fa-plus-circle" aria-hidden="true"></i>  Thêm</a>
        <a href="{{Route('admin.account')}}" title="" class="btn btn-danger" style="margin-bottom:20px; ">Xem Tất Cả</a>
    </div>
    <div class="col-md-9">
    	<form action="{{route('account.search')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    		@csrf
    		<button type="submit" class="btn btn-info pull-right" id="btnsearch" name="btnsearch">Search</button>
        	<input type="text" class="form-control pull-right" style="width: 300px;" name="txtsearch" id="txtsearch" value="" placeholder="Enter keyword...">
    	</form>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr >
                <th style="text-align: center" >ID</th>
				<th style="text-align: center" >Tên Tài Khoản</th>
				<th style="text-align: center" >Username</th>
				<th style="text-align: center" >Password</th>
				<th style="text-align: center" >Hình Ảnh</th>
				<th style="text-align: center" >Active</th>
				<th style="text-align: center" >Email</th>
				<th style="text-align: center" >Ngày Tạo</th>
				<th style="text-align: center" >Ngày Sửa</th>
                <th style="text-align: center" colspan="2">Chức Năng</th>

            </tr>
        </thead>
        <tbody>
                  <!-- hien thi du lieu -->
            @forelse($account as $acc)
	    	<tr>
	    		<td style="text-align: center">{{$acc->id}}</td>
	    		<td style="text-align: center">{{$acc->name}}</td>
	    		<td style="text-align: center">{{$acc->username}}</td>
	    		<td style="text-align: center">{{$acc->password}}</td>
	    		<td style="text-align: center"><img src="{{filter_var($acc->image,FILTER_VALIDATE_URL) ? asset($acc->image) : asset('storage/account/'.$acc->image)}}" width="80px"></td>
	    		<td style="text-align: center">{{$acc->active}}</td>
	    		<td style="text-align: center">{{$acc->email}}</td>
	    		<td style="text-align: center">{{$acc->created_at}}</td>
	    		<td style="text-align: center">{{$acc->updated_at}}</td>
	    		<td style="text-align: center"><a class="btn btn-warning" href="{{route('account.edit',$acc->id)}}">Sửa</a></td>
	    		<td style="text-align: center"><a class="deleteItem btn btn-danger" href="{{route('account.delete',$acc->id)}}">Xóa</a></td>
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
        {{$account->links()}}
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