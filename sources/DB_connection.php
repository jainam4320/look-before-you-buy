<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_lookbeforeyoubuy','root','');
//	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>
