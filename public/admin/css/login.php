<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action='login.php' class="dangnhap" method='POST'> 
		Tên đăng nhập : <input type='text' name='username' /> 
		Mật khẩu : <input type='password' name='password' /> 
		<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
		<a href='dangky.php' title='Đăng ký'>Đăng ký</a> 
		<?php require 'xuly.php';?> 
	<form> 
</body>
</html>