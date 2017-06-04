<?php
		// 	Соединяемся, выбираем базу данных (хост, логин, пароль)
		$link = mysqli_connect('localhost', 'root', '') or die('Не удалось соединиться: ' . mysql_error());
		//	echo 'Соединение успешно установлено';
		mysqli_select_db($link, 'prox') or die('Не удалось выбрать базу данных');
		
	?>