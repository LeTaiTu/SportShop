@extends('index')
@section('content')

<div class="container" style="margin-bottom: 30px">
	<div class="col-xl-8 offset-xl-2 py-5">

		<h1>Liên Hệ</h1>

		<!-- We're going to place the form here in the next step -->

		<form id="contact-form" method="post" action="contact.php" role="form">

			<div class="messages"></div>

			<div class="controls">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_name">Họ Tên </label>
							<input id="form_name" type="text" name="name" class="form-control" placeholder="Nhập thông tin họ tên *" required="required" data-error="FullName is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_lastname">Số Điện Thoại </label>
							<input id="form_lastname" type="number" name="phone" class="form-control" placeholder="Nhập số điện thoại *" required="required" data-error="Phone number is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_email">Email </label>
							<input id="form_email" type="email" name="email" class="form-control" placeholder="Nhập Email Của Bạn *" required="required" data-error="Valid email is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_need">Nhu cầu của bạn </label>
							<select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
								
								<option value="Báo giá">Báo giá</option>
								<option value="Trạng thái đơn hàng">Trạng thái đơn hàng</option>
								<option value="Bản sao hóa đơn">Bản sao hóa đơn</option>
								<option value="Khác">Khác</option>
							</select>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="form_message">Nội Dung </label>
							<textarea id="form_message" name="message" class="form-control" placeholder="Nhập thông tin cần gửi *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-12">
						<input type="submit" class="btn btn-success btn-send" value="Send message">
					</div>
				</div>

			</div>

		</form>


	</div>

</div>




@endsection