<?php
	include 'db_connect.php';
	session_start();
?>
<?php if (!(isset($_SESSION['login']) && isset($_SESSION['id']))) : ?>
<meta http-equiv="refresh" content="0; url=index.php">
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	
	<link href="bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="custom.css" media="screen">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="bootstrap.js"></script>
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	
	
	<nav class="navbar navbar-inverse  navbar-fixed-top navbar-right">
      <div class="col-sm-offset-0 col-sm-11 col-md-offset-0 col-md-11 col-lg-offset-1 col-lg-10">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
			
			<ul class="nav navbar-nav navbar-left">
				<!-- <li><a href="/" style="padding:0px"><img src="images/logo.jpg" width="95" height="50" alt="I"></a></li>-->
				<li><a href="/" class="link">ПРОКС / Барнаул</a></li>
			</ul>

          <ul class="nav navbar-nav navbar-right">
			<li><a href="/news_edit.php" class="link">Новости</a></li>
			<li><a href="/requests.php" class="link">Заявки</a></li>
			<li><a href="/logout.php" class="green-link">Выход</a></li>
          </ul>
        </div>
      </div>
    </nav>


</head>



</html>