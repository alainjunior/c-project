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
						<td>4800 руб.</td></tr>
						 
						<tr><td>1С:Зарплата и Управление Персоналом 8. Базовая версия</td>
						<td>7400 руб.</td></tr>
						 
						<tr><td>1С:Розница 8. Базовая версия</td>
						<td>3300 руб.</td></tr>

						<tr><td>1С:Управление торговлей 8. Базовая версия</td>
						<td>6700 руб.</td></tr>
						
						<tr><td>1С:Управление небольшой фирмой 8. Базовая версия</td>
						<td>4600 руб.</td></tr>

						<tr><td>1С:Бухгалтерия 8 ПРОФ</td>
						<td>13000 руб.</td></tr>

						<tr><td>1С:Бухгалтерия 8. Комплект на 5 пользователей</td>
						<td>26000 руб.</td></tr>

						<tr><td>1С:Зарплата и Управление Персоналом 8</td>
						<td>22600 руб.</td></tr>

						<tr><td>1С:Розница 8 ПРОФ</td>
						<td>13000 руб.</td></tr>	

						<tr><td>1С:Предприятие 8. Управление торговлей</td>
						<td>22600 руб.</td></tr>
						
						<tr><td>1С:Управление небольшой фирмой 8 ПРОФ</td>
						<td>17400 руб.</td></tr>
						
						<tr><td>1С:Управление небольшой фирмой 8 на 5 пользователей</td>
						<td>31800 руб.</td></tr>
						
						<tr><td>1С:Предприятие 8. Комплект прикладных решений на 5 пользователей</td>
						<td>50400 руб.</td></tr>
						
						<tr><td>1С:Комплексная автоматизация 8</td>
						<td>61700 руб.</td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на одно рабочее место</td>
						<td>6300 руб.</td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 5 рабочих мест</td>
						<td>21600 руб.</td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 10 рабочих мест</td>
						<td>41400 руб.</td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 20 рабочих мест</td>
						<td>78000 руб.</td></tr>
						
						<tr><td>1С:Предприятие 8. Клиентская лицензия на 50 рабочих мест</td>
						<td>187200 руб.</td></tr>
						
						<tr><td>1С:Предприятие 8.3 Лицензия на сервер </td>
						<td>50400 руб.</td></tr>
						
						<tr><td>Стоимость часа обслуживания </td>
						<td>1000 руб.</td></tr>
					</table>
					<div class="col-md-12 text-center">
						<a href="zayavka_program_prod.html"><button class="btn btn-primary btn-lg" style="float:center">Оставить заявку</button></a>
					</div>
					
				</div>
			</div>
		</div>
		
		<?php
			include 'advantages-panel.php';
		?>
		
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