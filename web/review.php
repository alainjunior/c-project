<?php
	include 'base.php';
?>

<html>
<head>
<title>ПРОКС / Барнаул - Отзывы</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">
	
</head>

<body>

	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 80px">
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

<?php
	include 'footer.php';
?>

</body>
</html>