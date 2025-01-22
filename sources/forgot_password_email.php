<!DOCTYPE html>
<html>
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php'); ?>
	<title> Email Verification </title>
</head>
<body>
	<header class="jumbotron">
		<h1 class="display-2"> Look Before You Buy </h1>
		<span class="write h3"> One Stop Location for smartphone details </span>
	</header>

	<form method="POST" action="forgot_password_OTP.php" style="margin-left:50px" >
		<p class="display-6 text-primary"> <b> Enter Your Email ID : </b><input type="Email" name="email" ></p>
		
		<input type="submit" class="btn btn-primary" value="Submit">
	</form>

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
</body>
</html>
