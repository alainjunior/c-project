<?php
	include 'base.php';
	include 'db_connect.php';
?>

<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">

</head>

<body>
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 80px">
		<div class="col-sm-12 col-md-9 col-lg-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<!-- сервисы берутся с БД?? -->
					
					<h2 class="text-center">Сопровождение 1C:Предприятие</h2>
					<hr size="0.01" width="100%">
					<p>
					Программные продукты «1С: Предприятие» являются мощным инструментом в ведении учета и автоматизации бизнес-процессов 
					различных предприятий, они постоянно совершенствуются и расширяются их функциональные возможности.<br><br>

					Чтобы с максимальной эффективностью использовать все возможности программ «1С: Предприятие», вести учет корректно и качественно,
					безошибочно составлять налоговую и бухгалтерскую отчетность для этого необходимо: быть в курсе последних изменений в 
					законодательстве, применять современные методики ведения учета, обновлять настройки системы - т.е. регулярно сопровождать.<br><br>

					Для решения данных задач, компания «ПРОКС» предлагает всем пользователям программных продуктов «1С» заключить 
					договор регулярного сопровождения.<br><br>

					Договор регулярного сопровождения является залогом корректной, эффективной и бесперебойной работы организации и включает в себя:<br><br>
					</p>
					<p>		 
					<z>★</z>&nbsp;&nbsp;Линия консультации, на все Ваши вопросы ответят специалисты компании «Прокс»<br><br>
					<z>★</z>&nbsp;&nbsp;Консультации аудитора по налоговому, бухгалтерскому и кадровому учету<br><br>
					<z>★</z>&nbsp;&nbsp;Консультации специалиста через удаленный доступ к вашему компьютеру<br><br>
					<z>★</z>&nbsp;&nbsp;Своевременное обновление конфигураций «1С», установка форм отчетности<br><br>
					<z>★</z>&nbsp;&nbsp;Линия консультаций<br><br>
					<z>★</z>&nbsp;&nbsp;Информационные, консультационные, технологические, методические и нормативно-правовые 
					материалы на DVD и на сайте http://its.1c.ru, доступ к бухгалтерской периодике, 
					которые помогут Вам разобраться с изменениями в законодательстве, работой в программе 1С:Предприятие<br><br>
					<z>★</z>&nbsp;&nbsp;Уникальные сервисы, включенные в договор регулярного сопровождения:<br><br>
					</p>
					
					
					
					
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Наименование</th>
								<th>Описание</th>
							</tr>
						</thead>
						
						<?php
							$sql = "SELECT id, icon, title, description FROM maintenance WHERE deleted='0'";
							$result = $link->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr id=".$row["id"]."><td><img src=".$row["icon"]." width=\"50\" height=\"50\"/></td><td>".$row["title"]."</td><td>".$row["description"]."</td></tr>";
								}
							} else {
								echo "<tr><td class=\"text-center\" colspan=3>Нет сервисов</td></tr>";
							}
						?>
					</table>
				
					<h2 class="text-center">Как сэкономить?</h2>
					<hr size="0.01" width="100%">
					<p>Мы поможем вам выбрать оптимальный тариф для вас, за минимальную плату.</p>
					<hr size="0.01" width="100%">
					<div class="col-md-12 text-center">
						<a href="application.php?type=3"><button class="btn btn-primary btn-lg" style="float:center">Оставить заявку</button></a>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			include 'advantages-panel.php';
		?>
		
	</div>
<?php
	include 'footer.php';
?>

</body>
</html>