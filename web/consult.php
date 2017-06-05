<?php
	include 'base.php';
	include 'db_connect.php';
?>

<html>
<head>
<title>ПРОКС / Барнаул - Онлайн-консультация</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">

</head>

<body>
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 80px">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="panel panel-default">
				<div class="panel-body ">
					<form class="form-horizontal" id="myForm" method="post">
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
									<button type="submit" name="send" class="btn btn-primary btn-lg">Отправить</button>
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
	
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Информация</h4>
				</div>
				<div class="modal-body text-center">
					<p>Заявка успешно отправлена.<br /> Специалист свяжется с Вами в ближайшее время</p>
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
						'phone':$("#phone").val(),
						'email':$("#email").val(),
						'city':'',
						'request_type':'0'
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
	</script>

</body>
</html>