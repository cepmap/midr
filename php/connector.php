<?php
    $hostname="localhost";
    $db_name="midr";
    $user_name="midr";
    $password="password";
    function    db_connect()
    {
        $db = mysqli_connect("localhost", "midr", "password", "midr");
        if ($db != 0) {
            echo "success";
        }
    }