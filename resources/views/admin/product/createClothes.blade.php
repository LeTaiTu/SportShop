@extends('admin.index')
@section('content')

<h2>Thêm sản phẩm</h2>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
 </ul>
</div>
@endif
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
 {{-- bao mat form khi dung form csrf --}}
 @csrf
 <div class="form-group">
    <label>Tên sản phẩm</label>
    <input type="text" name="name_pro" class="form-control" required="">
</div>
<input type="hidden" value="{{ session('kind') }}" name="kind_sport_id">
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
<div>
    <label>Kích cỡ</label>
</div>
{{-- S --}}
<div class="checkbox">
    <label><input type="checkbox"  name="txtSize[]" value="S" id="size-s" class="myCheckbox"> Size S</label>    
</div>
<div class="form-group" id="form-size-S">
    <input type="hidden" name="txtOptions[S][txtQuantity]" id="s1" placeholder="Số lượng" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[S][txtPriceOri]" id="s2" placeholder="Giá gốc" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[S][txtPriceSell]" id="s3" placeholder="Giá bán" class="form-control" style="width: 200px">
</div>
{{-- M --}}
<div class="checkbox">
    <label><input type="checkbox" name="txtSize[]" id="size-m" value="M" id="size-m"> Size M</label>    
</div>
<div class="form-group" id="form-size-M">
    <input type="hidden" name="txtOptions[M][txtQuantity]" id="m1" placeholder="Số lượng" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[M][txtPriceOri]" id="m2" placeholder="Giá gốc" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[M][txtPriceSell]" id="m3" placeholder="Giá bán" class="form-control" style="width: 200px">
</div> 
{{-- L --}}
<div class="checkbox">
    <label><input type="checkbox" name="txtSize[]" value="L" id="size-l"> Size L</label><br>
</div>
<div class="form-group" id="form-size-L">
    <input type="hidden" name="txtOptions[L][txtQuantity]" id="l1" placeholder="Số lượng" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[L][txtPriceOri]" id="l2" placeholder="Giá gốc" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[L][txtPriceSell]" id="l3" placeholder="Giá bán" class="form-control" style="width: 200px">
</div> 
{{-- XL --}}
<div class="checkbox">
    <label><input type="checkbox" name="txtSize[]" value="XL" id="size-xl"> Size XL</label>    
</div>
<div class="form-group" id="form-size-XL">
    <input type="hidden" name="txtOptions[XL][txtQuantity]" id="xl1" placeholder="Số lượng" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[XL][txtPriceOri]" id="xl2" placeholder="Giá gốc" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[XL][txtPriceSell]" id="xl3" placeholder="Giá bán" class="form-control" style="width: 200px">
</div> 
{{-- XXL --}}
<div class="checkbox">
    <label><input type="checkbox" name="txtSize[]" value="XXL" id="size-xxl" > Size XXL</label>    
</div>
<div class="form-group" id="form-size-XXL">
    <input type="hidden" name="txtOptions[XXL][txtQuantity]" id="xxl1" placeholder="Số lượng" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[XXL][txtPriceOri]" id="xxl2" placeholder="Giá gốc" class="form-control" style="width: 200px">
    <input type="hidden" name="txtOptions[XXL][txtPriceSell]" id="xxl3" placeholder="Giá bán" class="form-control" style="width: 200px">
</div> 
<button class="btn btn-warning" type="submit">Tạo Mới</button>
<button class="btn btn-info" type="reset">Nhập Lại</button>
<a class="btn btn-danger" href="{{route('admin.product')}}">Trở Lại</a>
</form>\
<script type="text/javascript">
    document.getElementById('size-s').onclick = function(e){
        if(this.checked){
            document.getElementById('s1').type = 'text';
            document.getElementById('s2').type = 'text';
            document.getElementById('s3').type = 'text';
        }
        else{
            document.getElementById('s1').type = 'hidden';
            document.getElementById('s2').type = 'hidden';
            document.getElementById('s3').type = 'hidden';
        }
    }

    document.getElementById('size-m').onclick = function(e){
        if(this.checked){
            document.getElementById('m1').type = 'text';
            document.getElementById('m2').type = 'text';
            document.getElementById('m3').type = 'text';
        }
        else{
            document.getElementById('m1').type = 'hidden';
            document.getElementById('m2').type = 'hidden';
            document.getElementById('m3').type = 'hidden';
        }
    }

    document.getElementById('size-l').onclick = function(e){
        if(this.checked){
            document.getElementById('l1').type = 'text';
            document.getElementById('l2').type = 'text';
            document.getElementById('l3').type = 'text';
        }
        else{
            document.getElementById('l1').type = 'hidden';
            document.getElementById('l2').type = 'hidden';
            document.getElementById('l3').type = 'hidden';
        }
    }

    document.getElementById('size-xl').onclick = function(e){
        if(this.checked){
            document.getElementById('xl1').type = 'text';
            document.getElementById('xl2').type = 'text';
            document.getElementById('xl3').type = 'text';
        }
        else{
            document.getElementById('xl1').type = 'hidden';
            document.getElementById('xl2').type = 'hidden';
            document.getElementById('xl3').type = 'hidden';
        }
    }

    document.getElementById('size-xxl').onclick = function(e){
        if(this.checked){
            document.getElementById('xxl1').type = 'text';
            document.getElementById('xxl2').type = 'text';
            document.getElementById('xxl3').type = 'text';
        }
        else{
            document.getElementById('xxl1').type = 'hidden';
            document.getElementById('xxl2').type = 'hidden';
            document.getElementById('xxl3').type = 'hidden';
        }
    }
</script>
@endsection