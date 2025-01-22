<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php'); ?>
		<meta charset="utf-8">
		<title> Browse | Look Before You Buy </title>

	</head>
	<body>
		<?php include('nav.php'); ?>
		<header class="jumbotron">
			<h1 class="display-4"> Look Before You Buy </h1>
			<span class="write h3"> One Stop Location for smartphone details </span>
		</header>

		<div class="col-md-8" style="margin:auto">
			<p class="h3 display-4 text-primary"> Complete Specs Comparison for <?php echo $_POST['phone_id']; ?> & <?php echo $_POST['phone_id_1'];?></p>
		</div>

		<?php include('get_comparision.php'); ?>
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
