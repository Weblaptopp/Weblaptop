@extends('user.layout')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Đăng Ký</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">ĐĂNG KÝ</h3>
			<div class="login-form-grids">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">Thông tin cá nhân</h5>
				<form class="animated wow slideInUp" data-wow-delay=".5s"action="{{route('postRegister')}}" method="post">
				{{ csrf_field() }}
					<input type="text" placeholder="HoTen..." required=" " name="HoVaTenND">
					<input type="text" placeholder="Username..." required=" " name="UserName" >	&nbsp
					<input type="email" placeholder="Email" required=" " name="Email">&nbsp
					<input type="text" placeholder="DiaChi" required=" " name="DiaChi">&nbsp
					<input type="text" placeholder="Phone" required=" " name="SDT">
					<input type="password" placeholder="Mật khẩu" required=" " name="password">
					<input type="password" placeholder="Nhập lại mật khẩu" required=" " name="repassword">
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Tôi chấp nhận các điều khoản và điều kiện</label>
						</div>
					</div>
					<input type="submit" value="Đăng Ký">
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="index.html">Trang chủ</a>
			</div>
		</div>
	</div>
<!-- //register -->
@stop