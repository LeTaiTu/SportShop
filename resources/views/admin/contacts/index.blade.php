@extends('admin.index')
@section('content')
    <h2 class="text-center" style="margin-bottom: 20px; font-weight: bold">Khách Hàng Liên Hệ</h2>
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
        
        <a href="{{route('admin.contact')}}" title="" class="btn btn-danger" style="margin-bottom:20px; ">Xem Tất Cả</a>
    </div>
    <div class="col-md-9">
    	<form action="{{route('contact.search')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    		@csrf
    		<button type="submit" class="btn btn-info pull-right" id="btnsearch" name="btnsearch">Search</button>
        	<input type="text" class="form-control pull-right" style="width: 300px;" name="txtsearch" id="txtsearch" value="" placeholder="Enter keyword...">
    	</form>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr >
                <th style="text-align: center" >ID</th>
				<th style="text-align: center" >Tên Khách Hàng</th>
				<th style="text-align: center" >Điện Thoại</th>
				<th style="text-align: center" >Email</th>
				<th style="text-align: center" >Nội Dung</th>
				<th style="text-align: center" >Ngày Tạo</th>
				<th style="text-align: center" >Ngày Sửa</th>
                <th style="text-align: center" >Chức Năng</th>

            </tr>
        </thead>
        <tbody>
                  <!-- hien thi du lieu -->
            @forelse($contact as $ct)
	    	<tr>
	    		<td style="text-align: center">{{$ct->id}}</td>
	    		<td style="text-align: center">{{$ct->name}}</td>
	    		<td style="text-align: center">{{$ct->phone}}</td>
	    		<td style="text-align: center">{{$ct->email}}</td>
	    		<td style="text-align: center">{{$ct->text}}</td>
	    		<td style="text-align: center">{{$ct->created_at}}</td>
	    		<td style="text-align: center">{{$ct->updated_at}}</td>
	    		
	    		<td style="text-align: center"><a onclick="deletect({{$ct->id}})" class="deleteAcc btn btn-danger" >Xóa</a></td>
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
        {{$contact->links()}}
    </div>
	<script type="text/javascript">
		// $(document).ready(function() {
		// 	$('.deleteAcc').click(function() {
		// 		if (confirm("Bạn Có Muốn Xóa Không?")) {
					
		// 			
		// 		}
		// 	});
		// });
		function deletect(id) {
		  if (confirm("Bạn Có Muốn Xóa Không?")) {
					
				//window.location.href = "";
			}
		}
	</script>
@endsection