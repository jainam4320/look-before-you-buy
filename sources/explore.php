<?php include("required_login.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/LookBeforeYouBuy/headlib/libs.php'); ?>
		<meta charset="utf-8">
		<title> Explore | Look Before You Buy </title>

	</head>
	<body>
		<?php include('nav.php'); ?>
		<header class="jumbotron">
			<h1 class="display-4"> Look Before You Buy </h1>
			<span class="write h3"> One Stop Location for smartphone details </span>
		</header>

		<div class="col-md-10" style="margin:auto">
			<p class="display-3 text-primary"> Explore The Awesomeness </p><br>
<?php
try{
	$conn = new PDO('mysql:host=127.0.0.1;dbname=php_lookbeforeyoubuy','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
$stmt = $conn->query("select phone_id,company_name,model_name,price,rating from phones_details");
while ($row = $stmt->fetch())
{

echo			'<div class="card bg-light w-75 ">';
echo				'<div class="card-body">';
echo				'<p class="card-title h2 text-info">'.$row['model_name'].'</p>';
echo				'<p class="card-text"> Brand : '.$row['company_name'] .'</p>';
echo				'<p class="card-text"> Price : '.$row['price'] .'</p>';
echo				'<p class="card-text"> Rating : '.$row['rating'] .'</p>';
echo				'<form action="getDetails.php" method="post"> <input type="hidden" name="phone_id" value="'.$row['phone_id'].'">';
echo				'<button type="submit" class="btn btn-primary"> Get Full Specs </button></form>';
echo			'</div></div><br>';
}
?>
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
