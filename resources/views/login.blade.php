@extends('index')
@section('content')
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

    <div id="content" class="container" style="background: #ffffff; margin-bottom: 15px;">
        <div class="row">
            <div class="form_login col-md-6 col-md-offset-3">
                <img src="{{asset('asset_admin/images/logo.png')}}" alt="">
                <p class="title">Đăng nhập</p>
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3" >
                        <form action="{{route('login.user')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon">ID</span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Nhập Email">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <button type="submit" class="btn btn_login">ĐĂNG NHẬP</button>
                            </div>
                        </form>
                        <p style="margin-top: 10px;">
                            <a href="{{route('register')}}">Đăng ký</a>
                            <a href="" style="position: absolute; right: 15px;">Quên mật khẩu</a>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection