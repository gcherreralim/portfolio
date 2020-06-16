<?php

    ini_set('display_errors',1);

    $name = $_POST["sendName"];
    $mail = $_POST["sendMail"];
    $subject = $_POST["sendSubject"];
    $msg = $_POST["sendMessage"];
    $to = "contactme@gcherreralim.com";

    $mail = mail($to, $subject, $msg);
    if($mail){
        echo "Thanks!";
    }else{
        echo "Oops";
    }
?>