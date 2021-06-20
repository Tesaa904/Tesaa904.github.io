<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper fadeInDown">
<div id="formContent">
	<h2 class="active">Login Sistem</h2>
	<div class="fadeIn first">
		<img src="icon/go-home-6.png" height="150px" alt="User Icon">
	</div>
	<form method="POST" action="login_check.php">
		<input type="text" name="username" id="login" class="fadeIn second" placeholder="masukkan username" autofocus="on">
		<input type="password" name="password" id="password" class="fadeIn third" autocomplete="off">
		<input type="submit" name="login" class="fadeIn fourth"value="Log in">
	</form>
</div>
</body>
</html>