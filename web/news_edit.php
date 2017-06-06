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
	<h2 class="text-center">Новости</h2>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Заголовок</th>
					<th>Дата</th>
					<th>Действия</th>
				</tr>
			</thead>
			
			<?php
				$sql = "SELECT * FROM news where deleted='0' ORDER BY date DESC LIMIT 25";
				$result = $link->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["title"]."</td><td>".$row["date"]."</td>";
						if($row["published"] == '0'){
							echo "<td><a class=\"btn btn-primary\" onclick=\"news_publish('".$row["id"]."', '1')\">Опубликовать</a>";
						} else {
							echo "<td><a class=\"btn btn-primary\" onclick=\"news_publish('".$row["id"]."', '0')\">Снять с публикации</a>";
						}
						echo "<a class=\"btn btn-danger\" style=\"margin-left:5px\" onclick=\"news_delete_confirm('".$row["id"]."')\">Удалить</a></td></tr>";
					}
				} else {
					echo "<tr><td class=\"text-center\" colspan=3>Нет новостей</td></tr>";
				}
			?>
		</table>
	</div>
	
	<div class="modal fade" id="myModal" data-id="" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Предупреждение</h4>
				</div>
				<div class="modal-body text-center">
					<p>Вы действительно хотите удалить эту новость?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onclick="news_delete()" data-dismiss="modal">Удалить</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<script type="text/javascript">
		function news_publish(id, published){
			$.ajax({
				type:'POST',
				url:'ajax_news_publish.php',
				data:{
					'id':id,
					'published':published
				},
				success:function (data) {
					if(data != 'success'){
						alert(data);
					} else {
						location.reload();
					}
					
				}
			});
		}
		
		function news_delete_confirm(id){
			$('#myModal').data("id", id);
			$('#myModal').modal('show');
		}
		
		function news_delete(){
			$.ajax({
				type:'POST',
				url:'ajax_news_delete.php',
				data:{
					'id':$("#myModal").data("id")
				},
				success:function (data) {
					if(data != 'success'){
						alert(data);
					} else {
						location.reload();
					}
					
				}
			});
		}
	</script>
<?php
	include 'footer.php';
?>

</body>
</html>