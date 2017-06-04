<?php
	$link = mysqli_connect('localhost', 'root', '') or die('Не удалось соединиться: ' . mysql_error());
	mysqli_select_db($link, 'prox') or die('Не удалось выбрать базу данных');
	mysqli_set_charset($link, 'utf8');	
?>