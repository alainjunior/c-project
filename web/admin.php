<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>ПРОКС / Барнаул - Авторизация</title>


	<link href="bootstrap.min.css" rel="stylesheet"/>
	<link href="custom.css" rel="stylesheet"/>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="bootstrap.js"></script>


<?php
require_once 'db_connect.php';
session_start();
$data = $_POST;
if (isset($data['submit'])) {
    $login = $data['login'];
    $password = $data['password'];

    $check_user = ("SELECT id FROM users WHERE login='" . mysqli_real_escape_string($link, $login) . "'") or die(mysqli_error($link));
    $ch_us = mysqli_query($link, $check_user) or die("We have some troubles. Sorry.");
    if (mysqli_num_rows($ch_us) > 0) {
        $login_password = ("SELECT password FROM users WHERE login='" . mysqli_real_escape_string($link, $login) . "'") or die(mysqli_error($link));
        $lo_pa = mysqli_query($link, $login_password) or die("We have some troubles. Sorry.");
        $row_lo_pa = mysqli_fetch_assoc($lo_pa);

        if (password_verify($password, $row_lo_pa['password'])) {
            $find_id = "SELECT id FROM users WHERE login='" . mysqli_real_escape_string($link, $login) . "'" or die(mysqli_error($link));
            $id = mysqli_query($link, $find_id) or die("We have some troubles. Sorry.");
            $row_id = mysqli_fetch_assoc($id);

            $_SESSION['login'] = $login;
            $_SESSION['id'] = $row_id['id'];
            ?>
            <meta http-equiv="refresh" content="0; url=news_edit.php">
            <?php
        } else {
            $info = '<div style="color: red"><hr>'
                    . '<p>Пароль неверный!</p>'
                    . '<hr></div>';
        }
    } else {
        $info = '<div style="color: red"><hr>'
                . '<p>Пользователя с таким логином не существует!</p>'
                . '<hr></div>';
    }
}

$info = isset($info) ? $info : NULL;
if($info != NULL){
?>
<script>
    $(function(){
        showModal();
    });
 </script>
<?php
}
?>

</head>

<body>
	<div class="col-sm-2 col-sm-offset-5" style="margin-top:50px">
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="text-center"><strong>Авторизация</strong></h4>
				<form class="" method="post" action="" style="margin-top:20px">
					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Логин</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
								<input type="text" required="required" minlength="4" maxlength="20" name="login" value="<?php echo @($data['login']); ?>" class="form-control"  id="username"  placeholder="Введите логин" />
							</div>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Пароль</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
								<input type="password" required="required" minlength="4" maxlength="255" name="password" value="<?php echo @($data['password']); ?>" class="form-control"  id="password"  placeholder="Введите пароль" />
							</div>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12 text-center">
							<button type="submit" id="auth_button" class="btn btn-primary login-button" name="submit">Войти</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	
	
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Ошибка</h4>
				</div>
				<div class="modal-body text-center">
					<p>Неверный логин или пароль</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
	function showModal(){
		$('#myModal').modal('show');
	}
	</script>
</body>


</html>