<?php
	include 'db_connect.php';
?>
<?php
	$sql = "UPDATE news SET deleted='1' WHERE id='".$_POST["id"]."'";
	$result = mysqli_query($link, $sql);
	
	if($result != false){
		echo 'success';
	} else {
		echo "Не удалось удалить новость. Ошибка: ".$result;
	}
?>