@extends('admin.index')
@section('content')

<h2>Sửa sản phẩm</h2>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
 </ul>
</div>
@endif
<form action="{{route('product.updateacces', session('id'))}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
 {{-- bao mat form khi dung form csrf --}}
 @csrf
 <div class="form-group">
    <label>Tên sản phẩm</label>
    <input type="text" name="name_pro" class="form-control" value="{{ $products->name_pro }}" required="">
</div>
<input type="hidden" value="{{ session('_id') }}" name="kind_sport_id">
<div class="form-group">
    <label>Hãng</label>
    <br>
    <select name="producer_id" class="form-control">
        @foreach($producers as $producer)
        <option value="{{$producer->id}}">{{$producer->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Hình Ảnh</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group">
    <label>Chi tiết sản phẩm</label><br>
    <textarea rows="5" name="content" style="width: 100%" ></textarea>
</div>
<div class="form-group">
    <label>Số lượng</label>
    <input type="text" name="quantity" class="form-control">
</div>
<div class="form-group">
    <label>Giá gốc</label>
    <input type="text" name="original_price" class="form-control">
</div>
<div class="form-group">
    <label>Giá bán</label>
    <input type="text" name="sell_price" class="form-control">
</div>
<button class="btn btn-warning" type="submit">Tạo Mới</button>
<button class="btn btn-info" type="reset">Nhập Lại</button>
<a class="btn btn-danger" href="{{route('admin.product')}}">Trở Lại</a>
</form>
@endsection