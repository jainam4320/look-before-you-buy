<?php
$phone_id = $_POST['phone_id'];
$company_name = $_POST['company_name'];
$model_name = $_POST['model_name'];
$price = $_POST['price'];
$rating = $_POST['rating'];
$released_date = $_POST['released_date'];

$dual_sim = $_POST['dual_sim'];
$hybrid_sim = $_POST['hybrid_sim'];
$dimentions = $_POST['dimentions'];
$weight = $_POST['weight'];
$display_type = $_POST['display_type'];
$display_size = $_POST['display_size'];
$display_pixel = $_POST['display_pixel'];
$aspect_ratio = $_POST['aspect_ratio'];

$ram = $_POST['ram'];
$internal_storage = $_POST["internal_storage"];
$card_slot = $_POST["card_slot"];
$gprs = isset($_POST['gprs'])?1:0;
$is2g = isset($_POST['is2g'])?1:0;
$is3g = isset($_POST['is3g'])?1:0;
$is4g = isset($_POST['is4g'])?1:0;
$volte = isset($_POST['volte'])?1:0;
$wifi = isset($_POST['wifi'])?1:0;
$bluetooth = isset($_POST['bluetooth'])?1:0;
$ir = isset($_POST['ir'])?1:0;
$fingerprint = isset($_POST['fingerprint'])?1:0;
$sensors = $_POST['sensors'];
$has35mm = isset($_POST['has35mm'])?1:0;


?>
