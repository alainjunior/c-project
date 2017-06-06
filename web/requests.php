<?php
	include 'baseAdmin.php';
	include 'db_connect.php';
	session_start();
?>
<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	
</head>

<body>

	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px">
	<h2 class="text-center">Заявки</h2>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ФИО</th>
					<th>Телефон</th>
					<th>Почта</th>
					<th>Город</th>
					<th>Дата</th>
					<th>Тип</th>
					<th></th>
				</tr>
			</thead>
			
			<?php
				$sql = "SELECT r.id, fio, phone, email, city, date, name FROM requests r join request_type rt on r.request_type=rt.id where checked='0' ORDER BY date DESC LIMIT 25";
				$result = $link->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["fio"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td>
						<td>".$row["city"]."</td><td>".$row["date"]."</td><td>".$row["name"]."</td><td><a class=\"btn fa fa-2x fa-check-square-o\" onclick=\"check_request(".$row["id"].")\"></a></td></tr>";
					}
				} else {
					echo "<tr><td class=\"text-center\" colspan=7>Нет заявок</td></tr>";
				}
			?>
		</table>
	</div>
		<script type="text/javascript">
		function check_request(id){
				$.ajax({
					type:'POST',
					url:'check_request.php',
					data:{
						'id':id
					},
					success:function (data) {
						location.reload();
					}
				});
			
		}
	</script>
<?php
	include 'footer.php';
?>

</body>
</html>