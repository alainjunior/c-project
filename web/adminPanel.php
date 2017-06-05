<?php
	include 'base.php';
	include 'db_connect.php';
	session_start();
?>
<?php if (!(isset($_SESSION['login']) && isset($_SESSION['id']))) : ?>
<meta http-equiv="refresh" content="0; url=index.php">
<?php endif; ?>
<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	
</head>

<body>

	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px">

	</div>
<?php
	include 'footer.php';
?>

</body>
</html>