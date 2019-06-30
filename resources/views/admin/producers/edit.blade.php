@extends('admin.index')
@section('content')

	<h2>Sửa </h2>
	@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
	@endif
    <form action="{{route('producer.update', $producers->id)}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    	{{-- bao mat form khi dung form csrf --}}
    	@csrf
    	
        <div class="form-group">
            <label>Tên nhà sản xuất</label>
            <input type="text" name="name" value="{{$producers->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="number" name="phone" value="{{$producers->phone}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{$producers->email}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Active</label>
            <input type="number" name="active" value="{{$producers->active}}" class="form-control">
        </div>
        
    	<div class="form-group">
            <label>Hình Ảnh</label>
            <img src="{{filter_var($producers->image,FILTER_VALIDATE_URL) ? asset($producers->image) : asset('storage/producer/'.$producers->image)}}" width="80px">
            <input type="file" name="image" class="form-control">
        </div>
    	<button class="btn btn-warning" type="submit">Cập Nhật</button>
    	<button class="btn btn-info" type="reset">Nhập Lại</button>
    	<a class="btn btn-danger" href="{{route('admin.producer')}}">Trở Lại</a>
    </form>

@endsection