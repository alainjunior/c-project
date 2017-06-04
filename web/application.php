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
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px;">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="panel panel-default" style="min-height: 375px;">
				<div class="panel-body ">
					<form class="form-horizontal" method="post">
						<fieldset>
							<?php if($_GET['type'] == 1): ?>
								<legend class="text-center" style="font-size:24px">Оставить заявку на консультацию по приобретению программного продукта</legend>
							<?php elseif($_GET['type'] == 2): ?>
								<legend class="text-center" style="font-size:24px">Оставить заявку на консультацию по сервисам</legend>
							<?php elseif($_GET['type'] == 3): ?>
								<legend class="text-center" style="font-size:24px">Подключить тариф "Сопровождение"</legend>
							<?php endif ?>
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input id="fname" name="name" type="text" placeholder="Фамилия, имя, отчество" class="form-control" required="required">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input id="city" name="city" type="text" placeholder="Город" class="form-control" required="required">
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
			<div class="panel panel-default" style="min-height: 375px;">
				<div class="panel-body ">
					<?php if($_GET['type'] == 1): ?>
						<img src="images/prod1.png" width="590" height="297" alt="I"></img>
					<?php else: ?>
						<img src="images/its2.png" width="590" height="297" alt="I"></img>
					<?php endif ?>
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