@extends('index')
@section('content')

    <div id="content" class="container" style="background: #ffffff; margin-bottom: 15px;">
        <div class="row">
            <div class="form_login col-md-6 col-md-offset-3">
                <img src="images/logo.png" alt="">
                <p class="title">Đăng nhập</p>
                <div class="row">
                    <div class="col-xs-6">
                        <form>
                            <div class="input-group">
                                <span class="input-group-addon">ID</span>
                                <input id="email" type="text" class="form-control" name="email" placeholder="Tài khoản">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <button class="btn btn_login">ĐĂNG NHẬP</button>
                            </div>
                        </form>
                        <p style="margin-top: 10px;">
                            <a href="">Đăng ký</a>
                            <a href="" style="position: absolute; right: 15px;">Quên mật khẩu</a>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <p style="color: #616161; text-align: center; line-height: 52px;">Hoặc đăng nhập bằng</p>
                        <div class="input-group" style="width: 100%;">
                            <button class="btn btn_facebook">Facebook</button>
                        </div>
                        <div class="input-group" style="width: 100%;">
                            <button class="btn btn_google">Google</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection