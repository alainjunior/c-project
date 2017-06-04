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
					<!-- сервисы берутся с БД?? -->
					<h2 class="text-center">Сервисы "1C"</h2>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Наименование</th>
								<th>Описание</th>
							</tr>
						</thead>
						<tr>
							<td><img src="images/kontragent.png" width="50" height="50" alt="I"></img></center></td>
							<td><center>1С:Контрагент</center></td>
							<td>Быстрая проверка информации о контрагентах, автоматическое заполнение реквизитов контрагентов 
								в различных документах и другие полезные функции</td>
						</tr>
				
				 
						<tr><td><center><img src="images/ofd.png" width="50" height="50" alt="I"></img></center></td>
						<td><center>1С:ОФД</center></td>
						<td>Подключение к операторам фискальных данных (ОФД) в соответствии с законом 54-ФЗ, квалифицированная поддержка партнерами 1С 
						при переходе на новый порядок применения контрольно-кассовой техники.</td>
						</tr>
				
						<tr><td><center><img src="images/spark.png" width="50" height="50" alt="I"></img></center></td>
						<td><center>1СПАРК Риски</center></td>
						<td>Оценка надежности и мониторинг контрагентов в программах 1С для принятия 
						взвешенных решений о сотрудничестве и минимизации налоговых рисков</td>
						</tr>
						 
						<tr><td><center><img src="images/otchet.png" width="50" height="50" alt="I"></img></center></td>
						<td><center>1С:Отчетность</center></td>
						<td>Быстрая и удобная подготовка и отправка регламентированной отчетности прямо из программ «1С», 
						а также поддержка других видов электронного документооборота с контролирующими органами.</td>
						</tr>
					</table>
					<div class="col-md-12 text-center">
						<a href="zayavka_servis.html"><button class="btn btn-primary btn-lg" style="float:center">Подключить</button></a>
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