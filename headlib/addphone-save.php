<?php
$phone_id = $_POST['phone_id'];

$company_name = $_POST['company_name'];
$model_name = $_POST['model_name'];
$price = $_POST['price'];
$rating = $_POST['rating'];
$released_date = $_POST['released_date'];

$_SESSION['para'] = array($phone_id,$company_name,$model_name,$price,$rating,$released_date);
?>
