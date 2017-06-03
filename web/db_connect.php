<?php
		// 	Соединяемся, выбираем базу данных (хост, логин, пароль)
		$link = mysql_pconnect('localhost', 'root', '') or die('Не удалось соединиться: ' . mysql_error());
		//	echo 'Соединение успешно установлено';
		mysql_select_db('prox') or die('Не удалось выбрать базу данных');
		
	?>