<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php
			include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php');
			include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/auth.php');
			//include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/addphone-save.php');
		?>
		<meta charset="utf-8">
		<title> Registration </title>
	</head>
	<body>
		<?php include('nav.php'); ?>
		<header class="jumbotron">
			<h1 class="display-2"> Look Before You Buy </h1>
			<span class="write h3"> One Stop Location for smartphone details </span>
		</header>
		<script type="text/javascript">
			function validate() {
				var con_num = document.getElementById("con_num").value;
				var password = document.getElementById("pass").value;
				var confirm_password = document.getElementById("cpass").value;
				if(confirm_password != password)
					alert("Password Not Matched. Please Check Again.");
				else
				{
					if(con_num.length != 10)
						alert("Contact Number must be of length 10. Please check again.");
					else
						document.getElementById('Registration').submit();
				}
			}
		</script>
		<center>
		<h1 class="display-4 text-success"> Registration Form </h1>
			<form method="POST" id="Registration" action="register.php">
			<br><br>
			Email - Id : <input type="Email" name="email_id" required  >
			<br><br>
			Password : <input type="Password" name="pass" id="pass" required >
			<br><br>
			Re-Enter Password : <input type="Password" name="cpass" id="cpass" required >
			<br><br>
			Name : <input type="text" name="name" required >
			<br><br>
			Contact Number : <input type="Number" name="con_num" id="con_num" required >
			<br><br>
			<input type="button" value="Register" class="btn btn-primary" onclick="validate()">
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
