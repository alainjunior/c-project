<?php
require_once 'connection_db.php';
require 'verification_code.php';
$data = $_POST;
if (isset($data['submit'])) {
    $login = $data['login'];
    $password = $data['password'];

    $find_status = "SELECT status FROM users WHERE login='" . mysqli_real_escape_string($connection, $login) . "'" or die(mysqli_error($connection));
    $status = mysqli_query($connection, $find_status) or die("We have some troubles. Sorry.");
    $row_status = mysqli_fetch_assoc($status);

    $check_user = ("SELECT id FROM users WHERE login='" . mysqli_real_escape_string($connection, $login) . "'") or die(mysqli_error($connection));
    $ch_us = mysqli_query($connection, $check_user) or die("We have some troubles. Sorry.");
    if (mysqli_num_rows($ch_us) > 0) {
        $login_password = ("SELECT password FROM users WHERE login='" . mysqli_real_escape_string($connection, $login) . "'") or die(mysqli_error($connection));
        $lo_pa = mysqli_query($connection, $login_password) or die("We have some troubles. Sorry.");
        $row_lo_pa = mysqli_fetch_assoc($lo_pa);

        if (password_verify($password, $row_lo_pa['password'])) {
            $find_id = "SELECT id FROM users WHERE login='" . mysqli_real_escape_string($connection, $login) . "'" or die(mysqli_error($connection));
            $id = mysqli_query($connection, $find_id) or die("We have some troubles. Sorry.");
            $row_id = mysqli_fetch_assoc($id);

            $find_role = "SELECT role FROM users WHERE login='" . mysqli_real_escape_string($connection, $login) . "'" or die(mysqli_error($connection));
            $role = mysqli_query($connection, $find_role) or die("We have some troubles. Sorry.");
            $row_role = mysqli_fetch_assoc($role);

            $_SESSION['login'] = $login;
            $_SESSION['id'] = $row_id['id'];
            $_SESSION['role'] = $row_role['role'];
            $_SESSION['status'] = $row_status['status'];

            $info = '<div style="color: green"><hr>'
                    . '<p>Вы успешно вошли в систему.</p>'
                    . '<p>Через 4 секунды Вы будете перенаправлены на главную страницу.</p>'
                    . '<p>Если этого не произошло, перейдите по данной ссылке:</p>'
                    . '<p><a href="index.php">Главная страница</a></p><hr></div>';
            ?>
            <meta http-equiv="refresh" content="4; url=index.php">
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
echo '<h4 class="text-center">' . $info . '</h4>';
?>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h4 class="text-center"><strong>Авторизация</strong></h4>
            <form class="" method="post" action="">
                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Логин</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" required="required" minlength="6" maxlength="20" name="login" value="<?php echo @($data['login']); ?>" class="form-control"  id="username"  placeholder="Введите логин" />
                        </div>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Пароль</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" required="required" minlength="6" maxlength="255" name="password" value="<?php echo @($data['password']); ?>" class="form-control"  id="password"  placeholder="Введите пароль" />
                        </div>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" id="auth_button" class="btn btn-primary login-button" name="submit">Войти</button>
                    <div class="text-right">
                        <a data-toggle="collapse" href="#forgot_password" aria-expanded="false" aria-controls="collapseExample">Не получается?</a>
                    </div>
                </div>
            </form>
            <!--забыли пароль?-->
            <?php
            $fp = $_POST;
            if (isset($fp['forgot_pass'])) {
                $email_fp = $fp['email_fp'];
                $find_user = ("SELECT id FROM users WHERE email='" . mysqli_real_escape_string($connection, $email_fp) . "'") or die(mysqli_error($connection));
                $fd_us = mysqli_query($connection, $find_user) or die("We have some troubles. Sorry.");
                if (mysqli_num_rows($fd_us) > 0) {
                    $to = $email_fp;
                    $subject = 'New password for escfory.ru';
                    $content = '<p>Hello!</p>'
                            . '<p>Your new password is:</p>'
                            . '<strong>' . $rnd_string . '</strong>';
                    include 'send_mail.php';
                    //send the message, check for errors
                    if (!$mail->send()) {
                        $info2 = '<div style="color: red"><hr>'
                                . '<p>Ошибка при отправке сообщения. Попробуйте, пожалуйста, ещё раз.</p>'
                                . '<hr></div>';
                        //. $mail->ErrorInfo
                    } else {
                        $new_password = password_hash($rnd_string, PASSWORD_DEFAULT);
                        $new_pass = ("UPDATE users SET password = '" . $new_password . "' WHERE email='" . mysqli_real_escape_string($connection, $email_fp) . "'") or die(mysqli_error($connection));
                        $n_p = mysqli_query($connection, $new_pass) or die("We have some troubles. Sorry.");

                        $info2 = '<div style="color: green"><hr>'
                                . '<p>Новый пароль отправлен на почту!</p>'
                                . '<p>Рекомендуем его сразу же сменить.</p><hr></div>';
                    }
                } else {
                    $info2 = '<div style="color: red"><hr>'
                            . '<p>Пользователя с таким email не существует!</p>'
                            . '<hr></div>';
                }
            }
            $info2 = isset($info2) ? $info2 : NULL;
            echo '<h4 class="text-center">' . $info2 . '</h4>';
            ?>
            <div class="collapse" id="forgot_password">
                <div class="well">
                    <form class="" method="post" action="" >
                        <div class="form-group">
                            <label for="email_fp" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" minlength="6" maxlength="255" required="required" name="email_fp" autocomplete="off" class="form-control"  id="email_fp"  placeholder="Введите email" />
                                </div>
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <button type="submit" id="forgot_pass" class="btn btn-primary login-button" name="forgot_pass">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>