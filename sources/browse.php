<?php include("required_login.php"); ?>
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
			<p class="h3 display-4 text-primary"> Select Model: </p>
			<form action="getDetails.php" method="post">
				<select class="custom-select" name="phone_id">
				<?php
				try{
					$conn = new PDO('mysql:host=127.0.0.1;dbname=php_lookbeforeyoubuy','root','');
					echo "Connection is established...<br/>";
					$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}
				catch(PDOException $e){
					echo $e->getMessage();
					die();
				}
					$stmt = $conn->query("select phone_id,company_name,model_name from phones_details");
					while ($row = $stmt->fetch())
					{
					    echo "<option value=".$row['phone_id'].">".$row['company_name']."  |  ".$row['model_name']."</option>";
					}
				?>
				</select>
				<br><br>

				<button type="submit" class="btn btn-primary"> Get Details </button>
			</form>
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
