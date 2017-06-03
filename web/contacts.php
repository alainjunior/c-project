<?php
	include 'base.php';
?>
<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="custom.css" media="screen">
	
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
	<div class="header">
		<img src="images/gran.png" width="100%" height="20" alt="I"></img>
	<div class="jumbotron">
		<div class="container">
			<div class="cont_inf">
				<h1>Наши контакты</h1>
				<hr size="0.01" width="100%">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-2" ><img class="contact-icon" src="images/logo.jpg" alt="I"></img>
						</div>
						<div class="col-sm-10">
							<strong>ООО "ПРОКС"</strong><br><span>656043, Алтайский край, г. Барнаул, ул. Пролетарская, 90
							тел. (3852) 22-94-44, 22-90-31, 35-44-61, 63-59-21</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-2" ><img class="contact-icon" src="images/999.jpg" alt="I"></img>
						</div>
						<div class="col-sm-10">
							<strong>Отдел 1С</strong><br><span><a href="mailto:1c@prox-it.ru"> 1c@prox-it.ru</a><br>
					Общий добавочный номер отдела: 604</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-2" ><img class="contact-icon" src="images/rutoken.jpg"  alt="I"></img>
						</div>
						<div class="col-sm-10">
							<strong>Отдел Информационной безопасности</strong><br><span><a href="mailto:oib@prox-it.ru"> oib@prox-it.ru</a><br>
					Общий добавочный номер отдела: 605</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
				<?php
					include '2gis.php';
				?>
				</div>
				
				

			</div>
		</div>
		
	</div>
	
	<div class="footer">
		<div class="foot">
			© ООО «ПРОКС»<br>
			656043, г. Барнаул, ул. Пролетарская, д.90
			<br><br>
			+7 (3852) 229-444. 
		</div>
	</div>


</body>
</html>