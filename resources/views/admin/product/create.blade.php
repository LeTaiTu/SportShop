@extends('admin.index')
@section('content')

<h2>Chọn loại sản phẩm</h2>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
 </ul>
</div>
@endif
<form action="{{route('product.create')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
 {{-- bao mat form khi dung form csrf --}}
 @csrf
<div class="form-group">
    <select name="key" class="form-control" style="width: 150px">
        @foreach($kind_sports as $kind_sport)
        <option value="{{$kind_sport->key}}">{{$kind_sport->tenloai}}</option>
        @endforeach
    </select>
</div> 
<button class="btn btn-warning" type="submitKind">Thêm</button>
<a class="btn btn-danger" href="{{route('admin.product')}}">Trở Lại</a>
</form>
@endsection