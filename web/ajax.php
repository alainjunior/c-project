<?php
	include 'db_connect.php';
?>
<?php
	$now = new DateTime();
	$now->setTimezone(new DateTimeZone('Asia/Novosibirsk'));
	$sql = "INSERT INTO requests (fio, phone, email, city, date, request_type) VALUES ('".$_POST["fio"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["city"]."','".$now->format('Y-m-d H:i:s')."','".$_POST["request_type"]."')";
	mysqli_query($link, $sql);
	
	
	require_once "SendMailSmtpClass.php";
	  
	$mailSMTP = new SendMailSmtpClass('prox.barnaul@yandex.ru', 'prox.barnaul112', 'ssl://smtp.yandex.ru', 'ПРОКС / Барнаул', 465);
	
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ПРОКС / Барнаул <prox.barnaul@yandex.ru>\r\n";
	
	if($_POST["request_type"] == 0) {
		$theme = 'Новая заявка на онлайн-консультацию';
		$message = 'ФИО клиента: '.$_POST["fio"].'<br>Контактный телефон: '.$_POST["phone"].'<br>Контактный e-mail: '.$_POST["email"].'<br>Дата отправки заявки: '.$now->format('Y-m-d H:i:s').'<br>';
	} else if($_POST["request_type"] == 1) {
		$theme = 'Новая заявка на программный продукт';
		$message = 'ФИО клиента: '.$_POST["fio"].'<br>Город: '.$_POST["city"].'<br>Контактный телефон: '.$_POST["phone"].'<br>Контактный e-mail: '.$_POST["email"].'<br>Дата отправки заявки: '.$now->format('Y-m-d H:i:s').'<br>';
	} else if($_POST["request_type"] == 2) {
		$theme = 'Новая заявка на сервис';
		$message = 'ФИО клиента: '.$_POST["fio"].'<br>Город: '.$_POST["city"].'<br>Контактный телефон: '.$_POST["phone"].'<br>Контактный e-mail: '.$_POST["email"].'<br>Дата отправки заявки: '.$now->format('Y-m-d H:i:s').'<br>';
	} else if($_POST["request_type"] == 3) {
		$theme = 'Новая заявка на сопровождение';
		$message = 'ФИО клиента: '.$_POST["fio"].'<br>Город: '.$_POST["city"].'<br>Контактный телефон: '.$_POST["phone"].'<br>Контактный e-mail: '.$_POST["email"].'<br>Дата отправки заявки: '.$now->format('Y-m-d H:i:s').'<br>';
	}
	
	$result =  $mailSMTP->send('romchik_sk@mail.ru', $theme, $message, $headers);
	
	
	if($result === true){
		echo 'success';
	} else {
		echo "Не удалось отправить письмо. Ошибка: ".$result;
	}
?>