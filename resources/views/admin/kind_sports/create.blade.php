@extends('admin.index')
@section('content')

	<h2>Tạo Mới Loại Sản Phẩm</h2>
	@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
	@endif
    <form action="{{route('kindsport.store')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    	{{-- bao mat form khi dung form csrf --}}
    	@csrf
    	<div class="form-group">
            <label>Tên Loại Sản Phẩm</label>
            <input type="text" name="tenloai" class="form-control">
        </div>
        <div class="form-group">
            <label>Key</label>
            <select name="key" class="form-control">
                <option value="quanao"> Quần áo </option>
                <option value="giay" >Giày</option>
                <option value="thucpham">Thực phẩm</option>
                <option value="phukien">Phụ kiện</option>
            </select>
        </div>
        
    	<button class="btn btn-warning" type="submit">Tạo Mới</button>
    	<button class="btn btn-info" type="reset">Nhập Lại</button>
    	<a class="btn btn-danger" href="{{route('admin.kindsport')}}">Trở Lại</a>
    </form>

@endsection