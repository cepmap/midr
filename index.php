<?php
if ($_COOKIE['user_name'] != ''){
    header("Location: /index_logged.php");
}
header("Content-Type: text/html; charset=utf-8");

//Отключение кеширования, не забудь удалить, дятел!
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<head>
    <title>Midnight</title>
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="js/athorisation_scripts.js"></script>
</head>
<body>

<div id="head_line">
    <div id="auth_btn_block">
        <div style="float: left; margin-left: 45%">
        <div id="header_string">
            Midnight<br>
            Riders<br>
        </div>
    </div>

        <div id="register_button">
            <input type="button" value="РЕГИСТРАЦИЯ" id="login_register_buttons" onclick="on_click_register()">
        </div>

        <div id="login_button">
            <input type="button" value="ВХОД" id="login_register_buttons" onclick="on_click_login()">
        </div>
    </div>
</div>

<div id="login_register_window">
    <div id="login_form" style="display: none">
        <form method="POST" action="php/login.php">
            Логин <input name="login" type="text" required><br>
            Пароль <input name="password" type="password" required><br>
            Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>
            <input name="submit" type="submit" value="Войти">
        </form>
    </div>

    <div id="register_form" style="display: none">
        <form method="POST" action="php/register.php">
            Логин <input name="login" type="text" required><br>
            Пароль <input name="password" type="password" required><br>
            Подтвердите пароль <input name="con_password" type="password" required><br>
            <input name="submit" type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>
</body>



