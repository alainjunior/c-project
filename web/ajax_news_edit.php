<?php
	include 'db_connect.php';
?>
<?php
	$now = new DateTime();
	$now->setTimezone(new DateTimeZone('Asia/Novosibirsk'));
	if($_POST["id"]==0){
		$sql = "INSERT INTO news (title, body, date) VALUES ('".$_POST["title"]."', '".$_POST["text"]."', '".$now->format('Y-m-d H:i:s')."')";
	}else{
		$sql = "UPDATE news SET title = '".$_POST["title"]."', body = '".$_POST["text"]."' WHERE id='".$_POST["id"]."'";
	}
		$result = mysqli_query($link, $sql);
	
	if($result != false){
		echo 'success';
	} else {
		echo "Не удалось редактировать новость. Ошибка: ".$result;
	}
?>