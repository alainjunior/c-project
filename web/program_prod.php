<?php
	include 'base.php';
?>


<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">
	
<script>
	jsHover = function() {
	var hEls = document.getElementById("menu").getElementsByTagName("li");
	for (var i=0, len=hEls.length; i<len; i++) {
	hEls[i].onmouseover=function() { this.className+=" jshover"; }
	hEls[i].onmouseout=function() { this.className=this.className.replace(" jshover", ""); }
	}
	}
	if (window.attachEvent && navigator.userAgent.indexOf("Opera")==-1) window.attachEvent("onload", jsHover);
</script>

	
</head>

<body>
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px">
		<div class="col-sm-12 col-md-9 col-lg-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<!-- продукты берутся с БД?? -->
					<h2 class="text-center">Продукты фирмы "1C"</h2>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Наименование</th>
								<th>Цена</th>
							</tr>
						</thead>
						<tr><td>1С:Бухгалтерия 8. Базовая версия</td>
						<td><center>4800 руб.</center></td></tr>
						 
						<tr><td>1С:Зарплата и Управление Персоналом 8. Базовая версия</td>
						<td><center>7400 руб.</center></td></tr>
						 
						<tr><td>1С:Розница 8. Базовая версия</td>
						<td><center>3300 руб.</center></td></tr>

						<tr><td>1С:Управление торговлей 8. Базовая версия</td>
						<td><center>6700 руб.</center></td></tr>
						
						<tr><td>1С:Управление небольшой фирмой 8. Базовая версия</td>
						<td><center>4600 руб.</center></td></tr>

						<tr><td>1С:Бухгалтерия 8 ПРОФ</td>
						<td><center>13000 руб.</center></td></tr>

						<tr><td>1С:Бухгалтерия 8. Комплект на 5 пользователей</td>
						<td><center>26000 руб.</center></td></tr>

						<tr><td>1С:Зарплата и Управление Персоналом 8</td>
						<td><center>22600 руб.</center></td></tr>

						<tr><td>1С:Розница 8 ПРОФ</td>
						<td><center>13000 руб.</center></td></tr>	

						<tr><td>1С:Предприятие 8. Управление торговлей</td>
						<td><center>22600 руб.</center></td></tr>
						
						<tr><td>1С:Управление небольшой фирмой 8 ПРОФ</td>
						<td><center>17400 руб.</center></td></tr>
						
						<tr><td>1С:Управление небольшой фирмой 8 на 5 пользователей</td>
						<td><center>31800 руб.</center></td></tr>
						
						<tr><td>1С:Предприятие 8. Комплект прикладных решений на 5 пользователей</td>
						<td><center>50400 руб.</center></td></tr>
						
						<tr><td>1С:Комплексная автоматизация 8</td>
						<td><center>61700 руб.</center></td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на одно рабочее место</td>
						<td><center>6300 руб.</center></td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 5 рабочих мест</td>
						<td><center>21600 руб.</center></td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 10 рабочих мест</td>
						<td><center>41400 руб.</center></td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 20 рабочих мест</td>
						<td><center>78000 руб.</center></td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 50 рабочих мест</td>
						<td><center>187200 руб.</center></td></tr>
						
						<tr><td>1С:Предприятие 8.3 Лицензия на сервер </td>
						<td><center>50400 руб.</center></td></tr>
						
						<tr><td>Стоимость часа обслуживания </td>
						<td><center>1000 руб.</center></td></tr>
					</table>
					<div class="col-md-12 text-center">
						<a href="zayavka_program_prod.html"><button class="btn btn-primary btn-lg" style="float:center">Оставить заявку</button></a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3 col-lg-3">
			<div class="panel panel-default text-center">
				<div class="panel-body">
				<img src="images/1.png" width="75" height="75" alt="I"></img><br>
				<p><b>Существенная экономия</b></p>
				<p style="font-size:12px">Мы поможем выбрать оптимальный вариант для вас</p>
				<br><br>
				<img src="images/2.png" width="75" height="75" alt="I"></img><br>
				<p><b>Полный комплекс услуг</b><p>
				<p style="font-size:12px">Все сервисы<p>
				<br><br>
				<img src="images/3.png" width="75" height="75" alt="I"></img><br>
				<p><b>Прозрачная система оплаты</b><p>
				<p style="font-size:12px">Оплата по тарифам<p>
				<br><br>
				<img src="images/4.png" width="75" height="75" alt="I"></img><br>
				<p><b>Гарантии качества</b><p>
				<p style="font-size:12px">Несем полную материальную ответственность<p>
				<br><br>
				<img src="images/6.png" width="75" height="75" alt="I"></img><br>
				<p><b>Высокая квалификация</b><p>
				<p style="font-size:12px">Проходим сертификацию и в курсе изменений законодательства<p>
				</div>
		</div>
	</div>

	<div class="pro">
			
			
			
			</center>
		</div>
		
	</div>
	<!--
	<div class="footer">
		<div class="foot">
			© ООО «ПРОКС»<br>
			656043, г. Барнаул, ул. Пролетарская, д.90
			<br><br>
			+7 (3852) 229-444. 
		</div>
	</div>
	-->

</body>
</html>