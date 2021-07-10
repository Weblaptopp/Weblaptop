@extends('user.layout')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Đăng Nhập</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">ĐĂNG NHẬP</h3>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form>
					<input type="email" placeholder="Email" required=" " >
					<input type="password" placeholder="Mật Khẩu" required=" " >
					<div class="forgot">
						<a href="#">Quên mật khẩu?</a>
					</div>
					<input type="submit" value="Đăng Nhập">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">Nếu là Người Mới</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.html">Đăng Ký Tại Đây</a>(Hoặc) quay về<a href="index.html">Trang Chủ<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
@stop