<?php
	session_start();
	$phone_id = $_POST['phone_id'];
	$company_name = $_POST['company_name'];
	$model_name = $_POST['model_name'];
	$price = $_POST['price'];
	$rating = $_POST['rating'];
	$released_date = $_POST['released_date'];

	$_SESSION['para'] = array($phone_id,$company_name,$model_name,$price,$rating,$released_date);
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
		<h1 class="display-4 text-success">Add Design and Display Details </h1>
		<br><form action="addphone3.php" method="post">
			<table><br>
			<tr><td> Is Dual Sim: </td><td><input type="checkbox" name="dual_sim" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Has Hybrid Slot: </td><td><input type="checkbox" name="hybrid_sim" checked data-toggle="toggle" data-on="<span class='fa fa-check-circle'></span> YES " data-off="<span class='fa fa-times-circle'></span> NO " data-onstyle="success" data-offstyle="danger"></td></tr>
			<tr><td> Phone Dimentions: </td><td><input type="text" name="dimentions" ></td></tr>
			<tr><td> Weight: </td><td><input type="number" name="weight"></td></tr>
			<tr><td> Display Type: </td><td><input type="text" name="display_type"></td></tr>
			<tr><td> Display Size: </td><td><input type="text" name="display_size" ></td></tr>
			<tr><td> Display Pixels: </td><td><input type="text" name="display_pixel" ></td></tr>
			<tr><td> Aspect Ratio: </td><td><input type="text" name="aspect_ratio" ></td></tr>
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
