<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php'); ?>

</head>
<body>
<?php
if(isset($_SESSION["login"]))
{
	echo("<h1 class='display-4 text-success'> You Logged Out Successfully </h1><br>");
	echo("<form method='post' action='login.php'> <input type='submit' class='btn btn-primary' value='login'> </form>");
	session_destroy();
}
else
{
	header("Location: http://localhost/LookBeforeYouBuy/sources/login.php");
}
?>
</body>
</html>
