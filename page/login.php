<?php session_start(); ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2015 07:26:32 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login - FLATY Admin</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!--base css styles-->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!--page specific css styles-->
	<link rel="stylesheet" type="text/css" href="../assets/noti/css/alertify.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/noti/css/alertify.rtl.min.css">

	<!--flaty css styles-->
	<link rel="stylesheet" href="../css/flaty.css">
	<link rel="stylesheet" href="../css/flaty-responsive.css">

	<link rel="shortcut icon" href="../img/favicon.html">
</head>
<body class="login-page">

	<!-- BEGIN Main Content -->
	<div class="login-wrapper">
		<!-- BEGIN Login Form -->
		<form id="form-login" action="http://shamsoft.net/flaty/index.html" method="get">
			<h3>Login to your account</h3>
			<hr/>
			<div class="form-group">
				<div class="controls">
					<input type="text" placeholder="Username" id="username" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<div class="controls">
					<input type="password" placeholder="Password" id="password" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox" disabled="true" value="remember" /> Remember me
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="controls">
					<button type="button" onclick="CheckLogin(); return false;" class="btn btn-primary form-control">Sign In</button>
				</div>
			</div>
			<hr/>
			<p class="clearfix">
			</p>
		</form>
		<!-- END Login Form -->


	</div>
	<!-- END Main Content -->


	<!--basic scripts-->
    <script src="../assets/noti/notify.min.js"></script>

	<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		function goToForm(form)
		{
			$('.login-wrapper > form:visible').fadeOut(500, function(){
				$('#form-' + form).fadeIn(500);
			});
		}
		$(function() {
			$('.goto-login').click(function(){
				goToForm('login');
			});
			$('.goto-forgot').click(function(){
				goToForm('forgot');
			});
			$('.goto-register').click(function(){
				goToForm('register');
			});
		});
		function CheckLogin() {
			var username = $("#username").val();
			var password = $("#password").val();
			if(!username || !password){
				noti("Vui lòng không bỏ trống!","error");
				return;
			}
			$.post('../api/Login/CheckLogin.php', {username: username,password:password}, function(result) {
				result =result.substring(57);

				result = JSON.parse(result);
				noti(result.Message,'success');
				if(result.Message = 'Thành công!')
					window.location.href = '/';
			});
		}
	</script>
	<script>
		function noti(text,type) {
			$.notify(text, {
				className: type,
				position: 'bottom right' 
			});
		}

	</script>
</body>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2015 07:26:32 GMT -->
</html>
