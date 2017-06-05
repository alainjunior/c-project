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
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 80px">
		<div class="col-sm-12 col-md-9 col-lg-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<!-- продукты берутся с БД?? -->
					<h2 class="text-center">Продукты фирмы "1C"</h2>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Наименование</th>
								<th>Цена</th>
							</tr>
						</thead>
						
						<?php
							$sql = "SELECT id, name, price FROM products WHERE deleted='0'";
							$result = $link->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr id=".$row["id"]."><td>".$row["name"]."</td><td>".$row["price"]." руб.</td></tr>";
								}
							} else {
								echo "<tr><td class=\"text-center\" colspan=2>Нет продуктов</td></tr>";
							}
						?>
					</table>
					<div class="col-md-12 text-center">
						<a href="application.php?type=1"><button class="btn btn-primary btn-lg" style="float:center">Оставить заявку</button></a>
					</div>
					
				</div>
			</div>
		</div>
		
		<?php
			include 'advantages-panel.php';
		?>
		
	</div>
<?php
	include 'footer.php';
?>

</body>
</html>