@extends('admin.index')
@section('content')

	<h2>Tạo Mới Thành Viên</h2>
	@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
	@endif
    <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    	{{-- bao mat form khi dung form csrf --}}
    	@csrf
    	<div class="form-group">
            <label>Tên Thành Viên</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Số Điện Thoại</label>
            <input type="number" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label>Email Thành Viên</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Nhập Lại Password</label>
            <input type="password" name="re_password" class="form-control">
        </div>
    	<button class="btn btn-warning" type="submit">Tạo Mới</button>
    	<button class="btn btn-info" type="reset">Nhập Lại</button>
    	<a class="btn btn-danger" href="{{route('admin.member')}}">Trở Lại</a>
    </form>

@endsection