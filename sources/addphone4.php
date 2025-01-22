
<?php
session_start();
$ram = $_POST['ram'];
$internal_storage = $_POST["internal_storage"];
$card_slot = $_POST["card_slot"];
$gprs = isset($_POST['gprs'])?1:0;
$is2g = isset($_POST['is2g'])?1:0;
$is3g = isset($_POST['is3g'])?1:0;
$is4g = isset($_POST['is4g'])?1:0;
$volte = isset($_POST['volte'])?1:0;
$wifi = isset($_POST['wifi'])?1:0;
$bluetooth = isset($_POST['bluetooth'])?1:0;
$ir = isset($_POST['ir'])?1:0;
$fingerprint = isset($_POST['fingerprint'])?1:0;
$sensors = $_POST['sensors'];
$has35mm = isset($_POST['has35mm'])?1:0;

array_push($_SESSION['para'], $ram, $internal_storage, $card_slot, $gprs, $is2g, $is3g, $is4g, $volte, $wifi, $bluetooth, $ir, $fingerprint, $sensors, $has35mm);
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
		<h1 class="display-4 text-success"> Camera and Technical Information </h1>
		<br><form action="addphone5.php" method="post">
			<table><br>
			<tr><td> Front Camera: </td><td><input type="number" name="front_camera" ></td></tr>
			<tr><td> Back Camera: </td><td><input type="number" name="back_camera" ></td></tr>
			<tr><td> OS: </td><td><input type="text" name="os" ></td></tr>
			<tr><td> CPU:</td><td><input type="text" name="cpu" ></td></tr>
			<tr><td> Core Details:</td><td><input type="text" name="core_details" ></td></tr>
			<tr><td> GPU:</td><td><input type="text" name="gpu" ></td></tr>
			<tr><td> Java Support: </td><td><input type="checkbox" name="java" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
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
