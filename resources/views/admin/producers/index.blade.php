@extends('admin.index')
@section('content')
    <h2 class="text-center" style="margin-bottom: 20px; font-weight: bold">Thêm mới nhà sản xuất</h2>
    @if(session()->has("success"))
    <div class="alert alert-success">
        <ul>    
            <li>{{session("success")}}</li>
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
    <div class="col-md-3">
        <a href="{{Route('producer.create')}}" title="" class="btn btn-info" style="margin-bottom:20px; "><i class="fa fa-plus-circle" aria-hidden="true"></i>  Thêm</a>
        <a href="{{Route('admin.producer')}}" title="" class="btn btn-danger" style="margin-bottom:20px; ">Xem Tất Cả</a>
    </div>
    <div class="col-md-9">
        <form action="{{route('producer.search')}}" method="post" enctype="multipart/form-data" accept-charset="utf8">
            @csrf
            <button type="submit" class="btn btn-info pull-right" id="btnsearch" name="btnsearch">Search</button>
            <input type="text" class="form-control pull-right" style="width: 300px;" name="txtsearch" id="txtsearch" value="" placeholder="Enter keyword...">
        </form>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr >
                <th style="text-align: center" >ID</th>
                <th style="text-align: center" >Tên nhà sản xuất</th>
                <th style="text-align: center" >Phone</th>               
                <th style="text-align: center" >Hình Ảnh</th>
                <th style="text-align: center" >Active</th>
                <th style="text-align: center" >Email</th>
                <th style="text-align: center" >Ngày Tạo</th>
                <th style="text-align: center" >Ngày Sửa</th>
                {{-- <th style="text-align: center" colspan="2">Chức Năng</th> --}}

            </tr>
        </thead>
        <tbody>
                  <!-- hien thi du lieu -->
            @forelse($producers as $producer)
            <tr>
                <td style="text-align: center">{{$producer->id}}</td>
                <td style="text-align: center">{{$producer->name}}</td>
                <td style="text-align: center">{{$producer->phone}}</td>              
                <td style="text-align: center"><img src="{{filter_var($producer->image,FILTER_VALIDATE_URL) ? asset($producer->image) : asset('storage/producer/'.$producer->image)}}" width="80px"></td>
                <td style="text-align: center">{{$producer->active}}</td>
                <td style="text-align: center">{{$producer->email}}</td>
                <td style="text-align: center">{{$producer->created_at}}</td>
                <td style="text-align: center">{{$producer->updated_at}}</td>
                <td style="text-align: center"><a class="btn btn-warning" href="{{route('producer.edit',$producer->id)}}">Sửa</a></td>
                <td style="text-align: center"><a class="deleteproducer btn btn-danger" href="{{route('producer.delete',$producer->id)}}">Xóa</a></td>
            </tr>
            @empty
                <tr>
                    <td>Không có dữ liệu</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="col-md-12 text-center">
        <!-- paging -->
        {{$producers->links()}}
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.deleteproducer').click(function() {
                if (confirm("Bạn Có Muốn Xóa Không?")) {
                    
                }
            });
        });
    </script>
@endsection
