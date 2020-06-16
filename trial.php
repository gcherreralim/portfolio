<?php
    $name = $_POST["sendName"];
    $mail = $_POST["sendMail"];
    $subject = $_POST["sendSubject"];
    $msg = $_POST["sendMessage"];

    $headers = 'From: ' . $mail

    mail("contactme@gcherreralim.com",$subject,$msg,$headers)
?>