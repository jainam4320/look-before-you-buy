<?php
	session_start();
	$_SESSION['para'] = null;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php'); ?>
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
		<h1 class="display-4 text-success"> Add basic Details </h1>
		<form action="addphone2.php" method="post"><br>
			<table>
			<tr><td> Phone ID: </td><td><input type="text" name="phone_id" ></td></tr>
			<tr><td> Company Name: </td><td><input type="text" name="company_name" ></td></tr>
			<tr><td> Model Name: </td><td><input type="text" name="model_name" ></td></tr>
			<tr><td> Price: </td><td><input type="number" name="price"></td></tr>
			<tr><td> Rating: </td><td><input type="number" name="rating"></td></tr>
			<tr><td> Released Date: </td><td><input type="date" name="released_date" ></td></tr>
			</table><br>
			<input type="submit" class="btn btn-primary" name="submit1" value="Next">
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
