@extends('admin.index')
@section('content')

	<h2>Thêm nhà sản xuất</h2>
	@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
	@endif
    <form action="{{route('producer.store')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    	{{-- bao mat form khi dung form csrf --}}
    	@csrf
    	
        <div class="form-group">
            <label>Tên nhà sản xuất</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="number" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Active</label>
            <input type="number" min="0" max="1" value="0" name="active" class="form-control">
        </div>
    	<div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="image" class="form-control">
        </div>
    	<button class="btn btn-warning" type="submit">Tạo Mới</button>
    	<button class="btn btn-info" type="reset">Nhập Lại</button>
    	<a class="btn btn-danger" href="{{route('admin.producer')}}">Trở Lại</a>
    </form>

@endsection