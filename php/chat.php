<?php
    header("Content-Type: text/html; charset=utf-8");
    require "connector.php";
    $db = mysqli_connect("localhost", "midr", "password", "midr");
    if ($_COOKIE['user_name'] != ""){
        $result = mysqli_query($db,"SELECT * FROM chat");
        $row = mysqli_fetch_array($result);
        echo $row['message'];
    }
    else {
        echo 'Для просмотра чата вам необходимо авторизоваться';
    };

