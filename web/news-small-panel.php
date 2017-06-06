<div class="col-sm-6 col-md-6 col-lg-4">
	<div class="panel panel-default">
		<div class="panel-body text-center">
			<h2>Новости</h2>
			<?php
				$sql = "SELECT id, title, date FROM news where deleted=\"0\" and published=\"1\" ORDER BY date DESC LIMIT 3";
				$result = $link->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<hr size=\"0.01\" width=\"100%\">".date_create_from_format('Y-m-d H:i:s', $row["date"])->format('Y-m-d')."<br><a href=\"#\">".$row["title"]."</a>";
					}
				} else {
					echo "Нет новостей";
				}
			?>
		</div>
	</div>
</div>