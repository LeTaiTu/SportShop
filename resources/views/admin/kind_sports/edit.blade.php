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
            <label>Tên Loại Sản Phẩm</label>
            <input type="text" name="tenloai" value="" class="form-control">
        </div>
        
        <button class="btn btn-warning" type="submit">Cập Nhật</button>
        <a class="btn btn-danger" href="{{route('admin.kindsport')}}">Trở Lại</a>
    </form>

@endsection