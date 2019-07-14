@extends('admin.index')
@section('content')

<h2>Sửa Loại Sản Phẩm</h2>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('kindsport.update', $kindsport->id)}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    {{-- bao mat form khi dung form csrf --}}
    @csrf
    <div class="form-group">
        <label>ID Loại Sản Phẩm</label>
        <input type="number" name="id" value="{{$kindsport->id}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Tên Loại Sản Phẩm</label>
        <input type="text" name="tenloai" value="{{$kindsport->tenloai}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Key</label>
        <select name="key" class="form-control">
            <option {{ $kindsport->key=='quanao' ? "selected" : '' }} value="quanao">Quần áo</option>
            <option {{ $kindsport->key=='giay' ? "selected" : '' }} value="giay">Giày</option>
            <option {{ $kindsport->key=='thucham' ? "selected" : '' }} value="thucham">Thực phẩm</option>
            <option {{ $kindsport->key=='phukien' ? "selected" : '' }} value="phukien">Phụ kiện</option>
        </select>
    </div>

    <button class="btn btn-warning" type="submit">Cập Nhật</button>
    <a class="btn btn-danger" href="{{route('admin.kindsport')}}">Trở Lại</a>
</form>

@endsection