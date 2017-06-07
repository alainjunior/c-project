<?php
	include 'base.php';
	include 'db_connect.php';
?>

<?php 

$sql = "SELECT title, body, date FROM news WHERE id='".$_GET['id']."'";
$result = $link->query($sql);
$row = $result->fetch_assoc();

?>

<html>
<head>
<title>ПРОКС / Барнаул - О компании</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">
	
</head>

<body>
	
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 80px">
		<!--<div class="col-sm-12 col-md-6 col-lg-8">-->
			<div class="panel panel-default">
				<div class="panel-body text-left">
					<div class="row">
						<div class="col-sm-12 col-md-2 col-lg-1">
							<a class="btn btn-primary" href="/" style="float:left"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> На главную</a>
						</div>
						<div class="col-sm-12 col-md-10 col-lg-10" style="margin-left: 20px">
							<h2 style="margin:0px">
								<?php
									echo $row["title"];
								?>
							</h2>
						</div>
					</div>
					<hr size="0.01" width="100%">
					<?php
						echo $row["body"];
					?>
					<hr size="0.01" width="100%">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<p style="float:right">
								<?php
									echo date_create_from_format('Y-m-d H:i:s', $row["date"])->format('d.m.Y, H:i');
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		<!--</div>-->

	</div>
<?php
	include 'footer.php';
?>


</body>
</html>