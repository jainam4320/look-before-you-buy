<?php
session_start();
if(!isset($_SESSION["admin"]))
{
	session_destroy();
	header("Location: http://localhost/LookBeforeYouBuy/sources/login.php");
}
?>