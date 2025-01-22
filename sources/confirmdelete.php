<?php session_start();
try{
	$conn = new PDO('mysql:host=127.0.0.1;dbname=php_lookbeforeyoubuy','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
	$id = $_POST['phone_id'];
	$stmt = $conn->query("delete from phones_details where phone_id ='".$id."'");
	$stmt->execute();
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
		<h1 class="display-4 text-success"> Deleted Successfully. </h1>
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
