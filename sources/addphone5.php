

<?php
session_start();
$front_camera = $_POST['front_camera'];
$back_camera = $_POST['back_camera'];
$os = $_POST['os'];
$cpu = $_POST['cpu'];
$core_details = $_POST['core_details'];
$gpu = $_POST['gpu'];
$java = isset($_POST['java'])?1:0;

array_push($_SESSION['para'], $front_camera, $back_camera, $os, $cpu, $core_details, $gpu, $java);

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
		<h1 class="display-4 text-success"> Battery and Additional Information </h1>
		<br><form action="confirmadd.php" method="post">
			<table><br>
			<tr><td> Battery Removable: </td><td><input type="checkbox" name="battery_removable" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Battery Size: </td><td><input type="number" name="battery_size"></td></tr>
			<tr><td> Fast Charging: </td><td><input type="checkbox" name="fast_charging" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Front Flash: </td><td><input type="checkbox" name="front_flash" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Back Flash: </td><td><input type="checkbox" name="back_flash" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			</table><br>
			<input type="submit" name="submit1" class="btn btn-primary" value="Add Record">
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
		<br>
		<?php include('footer.php'); ?>
	</body>
</html>
