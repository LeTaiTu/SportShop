@extends('admin.index')
@section('content')

    <h2>Tạo Mới Slide Ảnh</h2>
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <form action="{{route('slide.store')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
        {{-- bao mat form khi dung form csrf --}}
        @csrf
        <div class="form-group">
            <label>Tên Slide Ảnh</label>
            <input type="text" name="name_slide" class="form-control">
        </div>
        <div class="form-group">
            <label>Loại Sản Phẩm</label>
            <br>
            <select name="id_kind" class="form-control">
            @foreach($kindsport as $ksport)
                <option value="{{$ksport->id}}">{{$ksport->tenloai}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Chi Tiết Sản Phẩm</label>
            <br>
            <select name="id_details" class="form-control">
            @foreach($products as $pd)
                <option value="{{$pd->id}}">{{$pd->name_pro}}</option>
            @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="image" class="form-control">
            
        </div>
        {{-- <div class="form-group">
            <label>Chọn ảnh hiển thị đầu tiên : </label><br>
            <input type="radio" name="first_pic" value="1"> Hiển thị ảnh đầu tiên.<br>
            <input type="radio" name="first_pic" value="0"> Hiển thị thứ hai.<br>
        </div> --}}
        <button class="btn btn-warning" type="submit">Tạo Mới</button>
        <button class="btn btn-info" type="reset">Nhập Lại</button>
        <a class="btn btn-danger" href="{{route('admin.slide')}}">Trở Lại</a>
    </form>

@endsection