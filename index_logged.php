<?php

header("Content-Type: text/html; charset=utf-8");

//Отключение кеширования, не забудь удалить, дятел!
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");
//Конец отключения кеширования
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" xmlns="http://www.w3.org/1999/html"></script>
<script type="text/javascript" src="js/athorisation_scripts.js"></script>
<script type="text/javascript" src="js/chat.js"></script>
<head>
    <title>Midnight</title>
    <link href="css/styles.css" rel="stylesheet">

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
            <form method="post" action="php/logout.php">
            <input type="submit" value="ВЫХОД" id="login_register_buttons">
            </form>
        </div>
        <div id="user_name_field">
            <div id="users_icon" style="float: left; padding-right: 10px; padding-top: 10px;">Пикча</div>
            <a id="name_link" href="index_logged.php" style="float: right"><?php echo $_COOKIE['user_name']?></a>
        </div>
    </div>
</div>



<div id="body_block">

    <div id="left_column"></div>
    <div id="center_column"></div>
    <div id="right_column">
<!------ЧАТ------------------->
        <div class='chat'>
            <div class='chat-messages'>
                <div class='chat-messages__content' id='messages_field'>
                    Загрузка...
                </div>
            </div>
            <div class='chat-input'>
                <form method='post' id='chat-form'>
                    <input type='text' id='message-text' class='chat-form__input' placeholder='Введите сообщение'>
                    <input type='submit' class='chat-form__submit' value='SEND'>
                </form>
            </div>
        </div>

<!---------КОНЕЦ ЧАТА--------->
    </div>

</div>
</body>



