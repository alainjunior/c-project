<?php
	include 'db_connect.php';
?>
<?php
	$sql = "UPDATE news SET published=".$_POST["published"]." WHERE id='".$_POST["id"]."'";
	$result = mysqli_query($link, $sql);
	
	if($result != false){
		echo 'success';
	} else {
		if($_POST["published"] == '0') {
			echo "Не удалось опубликовать новость. Ошибка: ".$result;
		} else if($_POST["published"] == '1') {
			echo "Не удалось снять новость с публикации. Ошибка: ".$result;
		}
	}
?>