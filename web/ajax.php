<?php
	include 'db_connect.php';
?>
<?php

	$sql = "INSERT INTO requests (fio, phone, email, request_type) VALUES ('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["email"]."', '0')";
	mysqli_query($link, $sql);
?>