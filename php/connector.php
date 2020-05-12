<?php
    $hostname="localhost";
    $db_name="midr";
    $user_name="midr";
    $password="password";

    mysqli_connect($hostname,$user_name,$password,$db_name) or die("ERROR");
    if (mysqli_connect($hostname,$user_name,$password,$db_name)!=0){
        echo "success";
    }