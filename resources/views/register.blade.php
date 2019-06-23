@extends('index')
@section('content')

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
                <p class="title">Đăng ký</p>
                <form action="{{route('register.create')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
                    @csrf
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control" name="last_name" placeholder="Nhập họ" style="border-radius: 5px;">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <input type="email" class="form-control" name="email" placeholder="Nhập email" style="border-radius: 5px;">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <input type="password" class="form-control" name="password" placeholder="Mật khẩu (6 ký tự trở lên)"
                                    style="border-radius: 5px;">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control" name="first_name" placeholder="Nhập tên" style="border-radius: 5px;">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <input type="number" class="form-control" name="phone" placeholder="Nhập số điện thoại"
                                    style="border-radius: 5px;">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu"
                                    style="border-radius: 5px;">
                            </div>
                        </div>
                    </div>
                    <p style="padding: 15px 45px; margin-bottom: 80px;">Bằng cách gửi biểu mẫu này, bạn đồng ý với Điều
                        khoản & Điều kiện và Chính sách bảo mật của chúng tôi.</p>
                    <button class="btn btn_register" type="submit">ĐĂNG KÝ</button>
                </form>
            </div>
        </div>
    </div>
@endsection