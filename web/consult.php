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
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="panel panel-default">
				<div class="panel-body ">
				<!-- добавить стили для вопросов -->
				<!-- вопросы берутся с БД?? -->
					
					<form class="form-horizontal" method="post">
						<fieldset>
							<legend class="text-center" style="font-size:24px">Пожалуйста, заполните форму <br /> Специалист свяжется с Вами в ближайшее время</legend>
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input id="fname" name="name" type="text" placeholder="Фамилия, имя, отчество" class="form-control" required="required">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input id="phone" name="phone" type="text" placeholder="Контактный телефон" class="form-control" required="required">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input id="email" name="email" type="text" placeholder="Контактный e-mail" class="form-control" required="required">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 text-center">
									<button type="submit" class="btn btn-primary btn-lg">Отправить</button>
								</div>
							</div>
						</fieldset>
					</form>

				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6" style="text-align: center;">
			<div class="panel panel-default">
				<div class="panel-body ">
					<img src="images/its2.png" width="590" height="297" alt="I"></img>
					</div>
					</div>
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