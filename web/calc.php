<?php
	include 'base.php';
?>

<html>
<head>
<title>ПРОКС / Барнаул - Калькулятор тарифов</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">
	
</head>

<body>
	
	<div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 80px">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 class="text-center">Калькулятор тарифов</h2>
						<hr size="0.01" width="100%">
						
							<div id="base_type">
								<p style="font-size:16px">Выберите тип Вашей базы</p>
								<div class="radio">
								  <label><input type="radio" name="base_type" value="1" onchange="count_result()">Стандартная</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="base_type" value="2" onchange="count_result()">С доработками</label>
								</div>
							</div>
							<br>
							<div id="update_type">
								<p style="font-size:16px">Выберите способ обновления ПО</p>
								<div class="radio">
								  <label><input type="radio" name="update_type" value="1" onchange="count_result()">Самостоятельно</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="update_type" value="2" onchange="count_result()">С помощью специалиста</label>
								</div>
							</div>
							<br>
							<div id="base_count">
								<p style="font-size:16px">Укажите необходимое количество информационных баз</p>
								<div class="radio">
								  <label><input type="radio" name="base_count" value="1" onchange="count_result()">1 база / 1 рабочее место</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="base_count" value="2" onchange="count_result()">2 базы / 1 рабочее место</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="base_count" value="3" onchange="count_result()">3 и более баз / 1 рабочее место</label>
								</div>
							</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 class="text-center">Ваш тариф</h2>
						<hr size="0.01" width="100%">
						
						<div class="panel panel-default text-center" id="default" style="display:block; background-color:#fefefe">
							<div class="panel-body">
								<p style="font-size:16px; margin-bottom:0px">Заданным параметрам не соответствует ни один тариф</p>
							</div>
						</div>
						
						<div class="panel panel-default text-center" id="prof" style="display:none; background-color:#fefefe">
							<div class="panel-body">
								<p style="font-size:16px">Мы рекомендуем вам тарифный план</p>
								<p style="font-size:28px">ПРОФ</p>
								<p style="font-size:16px">2472 рублей / месяц</p>
							</div>
						</div>
						
						<div class="panel panel-default text-center" id="prof_plus" style="display:none; background-color:#fefefe">
							<div class="panel-body">
								<p style="font-size:16px">Мы рекомендуем вам тарифный план</p>
								<p style="font-size:28px">ПРОФ+</p>
								<p style="font-size:16px">3500 рублей / месяц</p>
							</div>
						</div>
						
						<div class="panel panel-default text-center" id="techno" style="display:none; background-color:#fefefe">
							<div class="panel-body">
								<p style="font-size:16px">Мы рекомендуем вам тарифный план</p>
								<p style="font-size:28px">ИТС Техно</p>
								<p style="font-size:16px">1309 рублей / месяц *</p>
								<p style="font-size:12px">* минимальный срок договора - 6 месяцев</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include 'footer.php';
?>

<script type="text/javascript">
function count_result(){
	if($('#base_type input:radio:checked').val() == '2'){
		$('#default').css("display", "none");
		$('#prof').css("display", "none");
		$('#techno').css("display", "none");
		$('#prof_plus').css("display", "block");
	} else if($('#base_type input:radio:checked').val() == '1' && $('#update_type input:radio:checked').val() == '1' && $('#base_count input:radio:checked').val() == '1') {
		$('#default').css("display", "none");
		$('#prof').css("display", "none");
		$('#prof_plus').css("display", "none");
		$('#techno').css("display", "block");
	} else {
		$('#default').css("display", "none");
		$('#prof_plus').css("display", "none");
		$('#techno').css("display", "none");
		$('#prof').css("display", "block");
	}
}
</script>

</body>
</html>