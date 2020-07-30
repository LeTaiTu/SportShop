@extends('admin.index')
@section('content')
    <a class="btn btn-primary" href="{{ url('admin/product/create') }}">Tạo mới</a>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Tên SP</th>
			<th>Ảnh</th>
			<th>Cỡ</th>
			<th>Giá Gốc</th>
			<th>Giá bán</th>
			<th>Số lượng</th>
			<th>Loại</th>
			<th>Nhà sản xuất</th>
			<th>Chi tiết sản phẩm</th>
			<th>Lượt xem</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
		@forelse($products as $product) {{-- check xem mảng có tồn tại ko rồi mới duyệt --}}
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name_pro }}</td>
			{{-- <td >Image</td> --}}

			<td><img src="{{filter_var($product->image,FILTER_VALIDATE_URL) ? asset($product->image) : asset('storage/product/'.$product->image)}}" width="80px"></td>
			{{-- @forelse($detais as $detail) --}}
			{{-- @if ($detail->product_id == $product->id) --}}
			<td>
				@forelse($details as $detail)
				@if($product->id==$detail->product_id)
				@if($product->kind_sport->key == 'thucpham')
				{{ $detail->size. ' gam' }}
				<br>
				@else
				{{ $detail->size }}
				<br>
				@endif
				@endif
				@empty
				
				@endforelse
			</td>
			<td>
				@forelse($details as $detail)
				@if($product->id==$detail->product_id)
				{{ number_format($detail->original_price). 'đ' }}
				<br>
				@endif
				@empty
				
				@endforelse
			</td>
			<td>
				@forelse($details as $detail)
				@if($product->id==$detail->product_id)
				{{ number_format($detail->sell_price ). 'đ'}}
				<br>
				@endif
				@empty
				
				@endforelse
			</td>
			<td>
				@forelse($details as $detail)
				@if($product->id==$detail->product_id)
				{{ $detail->quantity }}
				<br>
				@endif
				@empty
				
				@endforelse
			</td>
			{{-- @empty --}}
			{{-- <tr> --}}
				{{-- <td>Không có dữ liệu</td> --}}
			{{-- </tr> --}}
			{{-- @endif --}}
			{{-- @endforelse --}}
			<td >{{ isset($product->kind_sport) ? $product->kind_sport->tenloai : "" }}</td>
			<td >{{ isset($product->producer) ? $product->producer->name: "" }}</td>
			<td >{{ $product->content }}</td>
			<td >{{ $product->view }}</td>
			<td><a class="btn btn-warning" href="{{ route('product.edit',$product->id) }}">Chỉnh sửa</a></td>
			{{-- <td >Chỉnh sửa</td> --}}
			{{-- <td><button type="button" class="btn btn-warning deletePhone"  data-url="{{ route('product.delete',$product->id) }}"> Xóa</button> </td> --}}
			<td >Xóa</td>
		</tr>
		@empty {{-- Kiểm tra xem có dữ liệu ko --}}
		<tr>
			<td colspan="7">Không có dữ liệu</td>
		</tr>
		@endforelse
	</table>
	<div class="col-md-12 text-center">
		{{ $products->links() }}
	</div>
	
	{{-- <script type="text/javascript">
		$(document).ready(function(){
			$('.deletePhone').click(function(){
				if(!confirm("Bạn chắc chắn muốn xóa")) {
					return false;
				}
				let url = $(this).data('url');
				$.ajax({
					url: url,
					type: "POST",
					data: {
						"_token" : '{{ csrf_token() }}',
						"_method" : "DELETE"
					},
					success : function(result){
						if (result.message == "success") {
							window.location.reload(true);
						}
						else{
							alert("Xóa thất bại");
						}
						
					},
					error : function(error){
						alert("Error");
					}
				});
			});
		});
	</script> --}}
@endsection