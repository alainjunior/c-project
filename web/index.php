<?php
	include 'base.php';
?>

<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">
	<link rel="stylesheet" href="bootstrap.min.css" media="screen">
	
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

<script>
var slider = {
	slides:['3.png','7.png','8.png'],
	frame:0,
	set: function(image) { 
		document.getElementById("scr").style.backgroundImage = "url("+image+")";
	},
	init: function() { 
		this.set(this.slides[this.frame]);
	},
	left: function() { 
		this.frame--;
		if(this.frame < 0) this.frame = this.slides.length-1;
		this.set(this.slides[this.frame]);
	},
	right: function() { 
		this.frame++;
		if(this.frame == this.slides.length) this.frame = 0;
		this.set(this.slides[this.frame]);		
	}
};
window.onload = function() { 
	slider.init();
	setInterval(function() { 
		slider.right();
	},5000);
};
</script>

	
</head>

<body>
	<div class="header">

			<img src="images/gran.png" width="100%" height="20" alt="I"></img>
	<div class="jumbotron">
		<div class="container">
			<!-- replace with carousel
			<div class="dinamikponel">
				<div id="scr"></div>
			</div>-->
			<p>Программные продукты «1С: Предприятие» являются мощным инструментом в ведении учета и автоматизации 
			бизнес-процессов различных предприятий, они постоянно совершенствуются и расширяются их функциональные возможности. </p><br>
			<p>Чтобы с максимальной эффективностью использовать все возможности программ «1С: Предприятие», вести учет корректно и качественно, 
			безошибочно составлять налоговую и бухгалтерскую отчетность для этого необходимо: быть в курсе последних изменений в законодательстве,
			применять современные методики ведения учета, обновлять настройки системы - т.е. регулярно сопровождать. </p><br>
			<p> Для решения данных задач, компания ООО «ПРОКС» предлагает всем пользователям программных продуктов «1С» 
			заключить договор регулярного сопровождения.</p><br>
			<p>Договор регулярного сопровождения является залогом корректной, эффективной 
			и бесперебойной работы организации </p>
			<br>
			<h1>1С:Сопровождение - это:</h1>
			<hr size="0.01" width="100%">
			<p4><z>★</z>&nbsp;&nbsp;Линия консультации, на все Ваши вопросы ответят специалисты компании «ПРОКС»</p4>
			<br>
			<p4><z>★</z>&nbsp;&nbsp;Консультации аудитора по налоговому, бухгалтерскому и кадровому учету</p4>
			<br>
			<p4><z>★</z>&nbsp;&nbsp;Консультации специалиста через удаленный доступ к вашему компьютеру</p4>
			<br>
			<p4><z>★</z>&nbsp;&nbsp;Своевременное обновление конфигураций «1С», установка форм отчетности</p4>
			<br>
			<p4><z>★</z>&nbsp;&nbsp;Технологическое сопровождение Информационных баз данных (ИБ) «1С» (создание архивных копий ИБ, тестирование ИБ)</p4>
			<br>
			<p4><z>★</z>&nbsp;&nbsp;Настройка и доработка конфигураций «1С» под нужды организации</p4>
			<br>
			
			<!--
			<div class="news">
				<div class="osn">
				<figure class="sign">
				<figcaption><h3>Новости</h3></figcaption>
				<hr size="0.01" width="100%">
				01.01.2017<br>
				<a href="*">Онлайн-кассы. Подключение к ОФД. 54-ФЗ</a>
				<br><br>
				01.01.2017<br>
				<a href="*">День 1С: Карьеры</a>
				<br>
				<br><br>
				01.01.2016<br>
				<a href="*">3-НДФЛ за 2016 год! Начинаем декларационную компанию.</a>
				<br>
				<br><br>
				01.01.2015<br>
				<a href="*">3-НДФЛ за 2015 год! Начинаем декларационную компанию</a>
				<br>
				</figure>
				
				<figure class="sign">
				<figcaption><h3>Контакты</h3></figcaption>
				<hr size="0.01" width="100%">
				656043, г. Барнаул, ул. Пролетарская, 90<br>
				+7 (3852) 229-444
				</figure>
				</div>
			</div>
				-->
		</div>
	</div>
	
	
	<?php
		include 'footer.php';
	?>

	



</body>
</html>