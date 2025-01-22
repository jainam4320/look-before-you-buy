<?php
	session_start();
	$dual_sim = isset($_POST['dual_sim'])?1:0;
	$hybrid_sim = 0;
	if(isset($_POST['hybrid_sim']))
		$hybrid_sim = 1;
	$dimentions = $_POST['dimentions'];
	$weight = $_POST['weight'];
	$display_type = $_POST['display_type'];
	$display_size = $_POST['display_size'];
	$display_pixel = $_POST['display_pixel'];
	$aspect_ratio = $_POST['aspect_ratio'];

	array_push($_SESSION['para'], $dual_sim, $hybrid_sim, $dimentions, $weight, $display_type, $display_size, $display_pixel, $aspect_ratio);
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

		<center>
		<h1 class="display-4 text-success">Memory and Connectivity Details </h1>
		<br><form action="addphone4.php" method="post">

			<table><br>
			<tr><td> RAM: </td><td><input type="number" name="ram" ></td></tr>
			<tr><td> Internal Storage: </td><td><input type="number" name="internal_storage" ></td></tr>
			<tr><td> Card Slot: </td><td><input type="text" name="card_slot" ></td></tr>
			<tr><td> GRPS: </td><td><input type="checkbox" name="gprs" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> 2G: </td><td><input type="checkbox" name="is2g" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> 3G: </td><td><input type="checkbox" name="is3g" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> 4G: </td><td><input type="checkbox" name="is4g" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> VoLte: </td><td><input type="checkbox" name="volte" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Wifi:</td><td><input type="checkbox" name="wifi" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Bluetooth:</td><td><input type="checkbox" name="bluetooth" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> IR:</td><td><input type="checkbox" name="ir" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Fingerprint Sensor:</td><td><input type="checkbox" name="fingerprint" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Sensors: </td><td><input type="text" name="sensors"></td></tr>
			<tr><td> 3.5mm Jack: </td><td><input type="checkbox" name="has35mm" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			</table><br>

			<input type="submit" name="submit1" class="btn btn-primary" value="Next">
		</form>
		</center>

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
