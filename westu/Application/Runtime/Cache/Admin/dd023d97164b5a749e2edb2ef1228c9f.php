<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Login</title>
		<link href="/westu/Public/Admin/css/login_style.css" rel='stylesheet' type='text/css' />
		<script src="/westu/Public/Admin/js/jquery.min.js"></script>

	</head>

	<body>
		<!--SIGN UP-->
		<h1>作品分享后台登陆</h1>
		<div class="login-form">
			<div class="head-info">
				<label class="lbl-1"> </label>
				<label class="lbl-2"> </label>
				<label class="lbl-3"> </label>
			</div>
			<div class="clear"> </div>
			<div class="avtar">
				<img src="/westu/Public/Admin/images/avtar.png" />
			</div>
			<form method="post" action="<?php echo U('User/login');?>" >
				<input type="text" class="text" name="login_un"  placeholder="UserName" value="admin">
				<div class="key">
					<input type="password"  name="login_pwd"  placeholder="PassWord" value="123123">
				</div>
				<div id="aaa"></div>
				<div class="signin">
					<input type="submit" value="登陆">
				</div>
			</form>

		</div>

	</body>

</html>