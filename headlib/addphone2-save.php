<?php
$phone_id = $_POST['phone_id'];
echo '<h3> phone id is '.$phone_id.'</h3>';
$company_name = $_POST['company_name'];
$model_name = $_POST['model_name'];
$price = $_POST['price'];
$rating = $_POST['rating'];
$released_date = $_POST['released_date'];

$dual_sim = 0;
if(isset($_POST['dual_sim']))
	$dual_sim = 1;
$hybrid_sim = 0;
if(isset($_POST['hybrid_sim']))
	$hybrid_sim = 1;
$dimentions = $_POST['dimentions'];
$weight = $_POST['weight'];
$display_type = $_POST['display_type'];
$display_size = $_POST['display_size'];
$display_pixel = $_POST['display_pixel'];
$aspect_ratio = $_POST['aspect_ratio'];

?>
