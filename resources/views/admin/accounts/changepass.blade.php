@extends('admin.index')
@section('content')

	<h2>Đổi Mật Khẩu</h2>
	@if(session()->has("success"))
    <div class="alert alert-success">
        <ul>
            <li>{{session("success")}}</li>
        </ul>
    </div>
    @endif
    @if(session()->has("error"))
    <div class="alert alert-danger">
        <ul>
            <li>{{session("error")}}</li>
        </ul>
    </div>
    @endif
    {{-- hien thi loi --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            {{-- trong laravel dung {{thay cho echo}} --}}
            <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('account.updatepass',$account->id)}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
    	{{-- bao mat form khi dung form csrf --}}
    	@csrf
    	
        <div class="form-group">
            <label>Mật Khẩu Cũ</label>
            <input type="password" name="oldpassword" value="" class="form-control">
        </div>
        <div class="form-group">
            <label>Mật Khẩu Mới</label>
            <input type="password" name="newpassword" value="" class="form-control">
        </div>
    	<button class="btn btn-warning" type="submit">Cập Nhật</button>
    	<button class="btn btn-info" type="reset">Nhập Lại</button>
    	<a class="btn btn-danger" href="{{route('admin.account')}}">Trở Lại</a>
    </form>

@endsection