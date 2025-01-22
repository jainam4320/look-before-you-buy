<?php
	include("DB_connection.php");
	$sql="insert into user values(?,?,?,?)";
	$query=$dbhandler->prepare($sql);	
	$a = array($_POST["email_id"],$_POST["pass"],$_POST["name"],$_POST["con_num"]);
	$query->execute($a);
	header("Location: http://localhost/LookBeforeYouBuy/sources/login.php");
?>