<?php

session_start();
$battery_removable = isset($_POST['battery_removable'])?1:0;
$battery_size = $_POST['battery_size'];
$fast_charging = isset($_POST['fast_charging'])?1:0;
$front_flash = isset($_POST['front_flash'])?1:0;
$back_flash = isset($_POST['back_flash'])?1:0;

array_push($_SESSION['para'], $battery_removable, $battery_size, $fast_charging, $front_flash, $back_flash);

try{
	$conn = new PDO('mysql:host=127.0.0.1;dbname=php_lookbeforeyoubuy','root','');
	echo "Connection is established...<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


$sql = "INSERT INTO phones_details VALUES (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute($_SESSION['para']);
    // use exec() because no results are returned
echo '<h1> Done </h1>';
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php
			include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php');
			include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/auth.php');
			//include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/addphone-save.php');
		?>
		<meta charset="utf-8">
		<title> Look Before You Buy </title>
	</head>
	<body>
		<?php include('nav.php'); ?>
		<header class="jumbotron">
			<h1 class="display-2"> Look Before You Buy </h1>
			<span class="write h3"> One Stop Location for smartphone details </span>
		</header>

		<h1 class="display-2 text-success"> Smartphone Details Registered Successfully. </h1>

		<script type="text/javascript">
		$(function(){
	        $(".write").typed({
	            strings: ["Welcome to <b>Look Before You Buy</b>", "One stop destination for smartphone information", "Over 1000 Smartphones in the list"],
	            typeSpeed: 1,
				typeSpeed: 40,
				loop:true,
	        });
	    });
		</script>
		<?php include('footer.php'); ?>

	</body>
</html>
