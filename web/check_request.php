<?php
	include 'db_connect.php';
?>
<?php
	$sql = "UPDATE requests SET checked=\"1\" WHERE id='".$_POST["id"]."'";
	mysqli_query($link, $sql);
?>