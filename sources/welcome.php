<?php include("required_login.php"); ?>
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

		<div class="row text-center" style="margin-left:50px;margin-right:50px;">
			<div class="card text-white bg-dark col" style="margin:10px" >
			  <div class="card-body">
				<h5 class="card-title display-4">Browse</h5>
				<hr class="style14" style="border-color:white">
			    <p class="card-text"> Get detailed specs of your desired phone. </p>
				<form action="browse.php" method="post"> <button type="submit" class="btn btn-primary"> Know More </button></form>
			  </div>

			</div>
			<div class="card text-white bg-dark col" style="margin:10px">
			  <div class="card-body">
				<h5 class="card-title display-4">Explore</h5>
				<hr class="style14" style="border-color:white">
			    <p class="card-text"> Explore 1000+ smartphones and its features. </p>
				<form action="explore.php" method="post"> <button type="submit" class="btn btn-primary"> Explore More </button></form>
			  </div>
			</div>
			<div class="card text-white bg-dark col" style="margin:10px">
			  <div class="card-body">
				<h5 class="card-title display-4">Compare</h5>
				<hr class="style14" style="border-color:white">
			    <p class="card-text"> Confused? Compare two smartphones. </p>
				<form action="compare.php" method="post"> <button type="submit" class="btn btn-primary"> Compare Now </button></form>
			  </div>
			</div>
		</div>
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
