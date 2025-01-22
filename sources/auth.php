<?php
session_start();
$uname = $_POST["id"];
$pass = $_POST["pass"];
$captcha = $_POST["captcha"];
$captcha_Original = $_SESSION['vercode'];
session_destroy();
if($uname == "admin" && $pass == "admin123" && $captcha == $captcha_Original)
{
	session_start();
	$_SESSION['admin'] = "yes";
	$_SESSION['login'] = "yes";
	header("Location: http://localhost/LookBeforeYouBuy/sources/admin.php");
}
else
{
	if($captcha == $captcha_Original)
	{
		include("DB_connection.php");
		$query=$dbhandler->query("select * from user where u_email ='$uname' and u_password ='$pass' ");
		$count = $query->rowcount();
		if($count > 0)
		{
			session_start();
			$_SESSION["login"] = "yes";
			header("Location: http://localhost/LookBeforeYouBuy/sources/welcome.php");
		}
		else
		{
			session_start();
			$_SESSION["login_invalid"] = 1;
			header("Location: http://localhost/LookBeforeYouBuy/sources/login.php");
		}
	}
	else
	{
		session_start();
		$_SESSION["login_invalid"] = 2;
		header("Location: http://localhost/LookBeforeYouBuy/sources/login.php");
	}
}
?>
