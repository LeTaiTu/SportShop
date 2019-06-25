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
            <input type="text" name="txtName" class="form-control">
        </div>
        <div class="form-group">
            <label>Loại Sản Phẩm</label>
            <br>
            <select name="txtKind" class="form-control">
            @foreach($kind_sports as $kind_sport)
                <option value="{{$kind_sport->id}}">{{$kind_sport->tenloai}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Hãng</label>
            <br>
            <select name="txtProducer" class="form-control">
            @foreach($producers as $producer)
                <option value="{{$producer->id}}">{{$producer->name}}</option>
            @endforeach
            </select>
        </div>
    	<div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="txtImage" class="form-control">
        </div>
        <div class="form-group">
            <label>Chi tiết sản phẩm</label><br>
            <textarea rows="5" name="txtContent" style="width: 100%" ></textarea>
        </div>
        <div>
            <label>Kích cỡ</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="txtSize" value="S" id="s"> Size S</label>    
        </div>
        <div class="form-group">
            <input type="hidden" name="txtName" id="biens" placeholder="Số lượng">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="txtSize" value="M" id="m"> Size M</label>    
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="txtSize" value="L" id="l"> Size L</label><br>

        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="txtSize" value="XL" id="xl"> Size XL</label>    
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="txtSize" value="XXL" id="xxl"> Size XXL</label>    
        </div>
    	<button class="btn btn-warning" type="submit">Tạo Mới</button>
    	<button class="btn btn-info" type="reset">Nhập Lại</button>
    	<a class="btn btn-danger" href="{{route('admin.product')}}">Trở Lại</a>
    </form>
<script type="text/javascript">
    document.getElementById('s').onclick = function(e){
        if(this.checked){
            document.getElementById('biens').type = 'text';
        }
        else{
            document.getElementById('biens').type = 'hidden';
        }
    }
</script>
@endsection