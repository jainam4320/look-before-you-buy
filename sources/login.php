<?php
	session_start();
	if(isset($_SESSION["login"]))
		header("Location: http://localhost/LookBeforeYouBuy/sources/welcome.php");
	if(isset($_SESSION["login_invalid"]))
		echo "<script>print_Invalid();</script>";
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php'); ?>
	<title>Login</title>
</head>
<body>
	<header class="jumbotron">
		<h1 class="display-4"> Look Before You Buy </h1>
		<span class="write h3"> One Stop Location for smartphone details </span>
	</header>
<script type="text/javascript">
	function print_Invalid() {
		alert("Incorrect Login Credentials.");
	}
</script>
	<h1 class="display-4 text-primary">Login Page</h1><br>

	<form method="POST" action="auth.php" class="text-center">
		Login - Id : <input type="text" name="id" required>
		<br><br>
		Password : <input type="Password" name="pass" required>
		<br><br>
		Enter Code <img src="captcha.php"> : <input type="text" name="captcha" />
		<br><br><br>
		<input type="submit" class="btn btn-primary" name="Login" value="Login">
		<a href="forgot_password_email.php"> Forgot Password </a>
	</form>
	<br>
	<form method="POST" action="registration.php" class="text-center">
		New to Us? <input type="submit" class="btn btn-success" value="Register New Account">
	</form>
</body>
</html>
