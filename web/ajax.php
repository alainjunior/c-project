<?php
	include 'db_connect.php';
?>
<?php
	$now = new DateTime();
	$now->setTimezone(new DateTimeZone('Asia/Novosibirsk'));
	$sql = "INSERT INTO requests (fio, phone, email, city, date, request_type) VALUES ('".$_POST["fio"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["city"]."','".$now->format('Y-m-d H:i:s')."','".$_POST["request_type"]."')";
	mysqli_query($link, $sql);
	echo 'success';
?>