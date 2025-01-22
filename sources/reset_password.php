<?php
session_start();
$mail = $_SESSION["mail"];
include("DB_connection.php");
if($_POST["new_pass"] == $_POST["con_new_pass"])
{
	$pass = $_POST["new_pass"];
	$query=$dbhandler->query(" UPDATE user SET u_password = '$pass'  WHERE u_email = '$mail' ");
	session_destroy();
	header("Location: http://localhost/LookBeforeYouBuy/sources/login.php");
}session_destroy();

?>
