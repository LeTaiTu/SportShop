<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{asset('asset_admin/css/animate.css')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('asset_admin/css/style2.css')}}">
    <script src="{{asset('asset_admin/js/jquery-1.12.0.min.js')}}"></script>
</head>
<body>
    <div class="container">

        <div class="login-box animated fadeInUp" style="max-width:340px">
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
            <form action="{{route('admin')}}" method="POST" >
                @csrf
                <div class="box-header">
                    <h2>Đăng nhập</h2>
                </div>
                <label for="username">Tên đăng nhập</label>
                <br/>
                <input type="text" name="username" id="username">
                <br/>
                <label for="password">Mật khẩu</label>
                <br/>
                <input type="password" name="password" id="password">
                <br/>
                <input type="submit" name="btnSubmit" value="Đăng nhập"/>
                <input type="reset" name="btnReset" value="reset"/>
            </form>
        </div>
    </div>
</body>
</html>