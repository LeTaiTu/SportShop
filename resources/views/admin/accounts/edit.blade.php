@extends('admin.index')
@section('content')

	<h2>Sửa Tài Khoản</h2>
	@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
	@endif
    <form action="{{route('account.update',$account->id)}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    	{{-- bao mat form khi dung form csrf --}}
    	@csrf
    	<div class="form-group">
            <label>Tên Tài Khoản</label>
            <input type="text" name="name" value="{{$account->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="{{$account->username}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{$account->password}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{$account->email}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Active</label>
            <input type="number" name="active" value="{{$account->active}}" class="form-control">
        </div>
        <img src="/storage/account/{{$account->image}}" width="80" alt="No Pic">
    	<div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="image" class="form-control">
        </div>
    	<button class="btn btn-warning" type="submit">Cập Nhật</button>
    	<a class="btn btn-danger" href="{{route('admin.account')}}">Trở Lại</a>
    </form>

@endsection