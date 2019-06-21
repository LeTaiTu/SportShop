@extends('admin.index')
@section('content')

    <h2>Cập Nhật Slide Ảnh</h2>
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <form action="{{route('slide.update', $slide->id)}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
        {{-- bao mat form khi dung form csrf --}}
        @csrf
        <div class="form-group">
            <label>Tên Slide Ảnh</label>
            <input type="text" name="name_slide" value="{{$slide->name_slide}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Loại Sản Phẩm</label>
            <br>
            <select name="id_kind" class="form-control">
            @foreach($kindsport as $ksport)
                <option {{$ksport->id == $slide->id_kind ? "Selected" :""}} value="{{$ksport->id}}">{{$ksport->tenloai}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Hình Ảnh</label>
            <img src="{{asset('/storage/slide/'.$slide->image)}}" width="80">
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-warning" type="submit">Cập Nhật</button>
        <a class="btn btn-danger" href="{{route('admin.slide')}}">Trở Lại</a>
    </form>

@endsection