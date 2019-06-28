@extends('admin.index')
@section('content')

    <h2>Sửa Thông Tin</h2>
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <form action="{{route('member.update', $user->id)}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
        {{-- bao mat form khi dung form csrf --}}
        @csrf
        <div class="form-group">
            <label>Tên Thành Viên</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Số Điện Thoại</label>
            <input type="number" name="phone" value="{{$user->phone}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Email Thành Viên</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{$user->password}}" value="" class="form-control">
        </div>
        <div class="form-group">
            <label>Nhập Lại Password</label>
            <input type="password" name="re_password" value="{{$user->password}}" class="form-control">
        </div>
        <button class="btn btn-warning" type="submit">Cập Nhật</button>
        <a class="btn btn-danger" href="{{$user->name}}">Trở Lại</a>
    </form>

@endsection