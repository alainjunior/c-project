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
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 80px;">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="panel panel-default" style="min-height: 375px;">
				<div class="panel-body ">
					<form id="myForm" class="form-horizontal" method="post">
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
	
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Информация</h4>
				</div>
				<div class="modal-body text-center">
					<?php if($_GET['type'] == 1): ?>
						<p>Заявка на консультацию по приобретению программного продукта успешно отправлена</p>
					<?php elseif($_GET['type'] == 2): ?>
						<p>Заявка на консультацию по сервисам успешно отправлена</p>
					<?php elseif($_GET['type'] == 3): ?>
						<p>Заявка на подключение тарифа "Сопровождение" успешно отправлена</p>
					<?php endif ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
<?php
	include 'footer.php';
?>
	
	<script type="text/javascript">
		$(document).ready(function () {
			$('#myForm').on('submit', function(e) {
				e.preventDefault();
				$.ajax({
					type:'POST',
					url:'ajax.php',
					data:{
						'fio':$("#fname").val(),
						'city':$("#city").val(),
						'phone':$("#phone").val(),
						'email':$("#email").val(),
						'request_type': getParameterByName('type')
					},
					response:'text',
					success:function (data) {
						if(data != 'success'){
							alert(data);
						} else {
							$('#myModal').modal('show');
							$("#myForm").trigger('reset');
						}
					}
				});
			});
		});
		
		function getParameterByName(name, url) {
			if (!url) url = window.location.href;
			name = name.replace(/[\[\]]/g, "\\$&");
			var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"), results = regex.exec(url);
			if (!results) return null;
			if (!results[2]) return '';
			return decodeURIComponent(results[2].replace(/\+/g, " "));
		}
	</script>


</body>
</html>