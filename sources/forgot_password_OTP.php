<?php include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php'); ?>

<?php
session_start();
$mail = $_POST["email"];
include("DB_connection.php");
$query=$dbhandler->query("select * from user where u_email ='$mail'");
$count = $query->rowcount();
if($count <= 0 )
	{
	$_SESSION["login_invalid"] = "yes";
	header("Location: http://localhost/LookBeforeYouBuy/sources/login.php");
	}
else
{
	$_SESSION["mail"] = $mail;
	echo "<!DOCTYPE html>";
	echo "<html>";
	echo "<head>";
		echo "<title>Reset Password</title>";
	echo "</head>";
	echo "<body>";
		echo "<form method=\"POST\" action=\"reset_password.php\" >";
		echo "<p class='display-4 text-danger'> Forgot Password </p>";
			echo "New Password : <input type=\"Password\" name=\"new_pass\">";
			echo "Re-enter New Password : <input type=\"Password\" name=\"con_new_pass\"><br>";
			echo "<input type=\"submit\" class='btn btn-primary' value=\"Change\">";
		echo "</form>";
	echo "</body>";
	echo "</html>";
}
?>
