@extends('index')
@section('content')
			<div id="content" class="container">				 			                
				<form>
						<table>
							<h3>Thông tin liên hệ</h3>
							<tr>
								<td>Your name</td>
								<td><input type="text" name="txtName" id="name" placeholder="Tên ..."></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="txtEmail" id="email" placeholder="Email..."></td>
							</tr>	
							<tr>
								<td>Số điện thoại liên hệ</td>
								<td><input type="number" name="txtNumber" id="number" placeholder="Số điện thoại"></td>
							</tr>										
							<tr>
								<td>Phản hồi</td>
								<td><textarea></textarea></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="txtsubmit" value="Submit"></td>
							</tr>
						</table>
				</form>											
			</div>			
@endsection