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
		<div class="col-sm-6 col-md-6 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body text-center">
				<!-- возможно, каждый из блоков отзыва стоит формировать в отдельном php -->
				<!-- нужны особые стили -->
					<h2>Отзывы клиентов</h2>
					<hr size="0.01" width="100%">
					<b>ФИО клиента<br>
					ООО "1"<br>
					30.06.2016</b><br><br>
					<p4>Хочу выразить благодарность нашему партнеру "1С:Сопровождение. ПРОКС" текст отзыва </p4>
					<br><br>
					<p4> еще текст</p4>
					<hr size="0.01" width="100%">
					<br>
					<b>ФИО клиента<br>
					ООО "2"<br>
					08.04.2016</b><br><br>
					<p4>текст отзыва</p4>
					<hr size="0.01" width="100%">
					<br>
					<b>ФИО клиента<br>
					ООО "2"<br>
					15.01.2016</b><br><br>
					<p4>текст отзыва</p4>  	
				</div>
			</div>
		</div>
		
		<?php
			include 'contacts-small-panel.php';
		
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