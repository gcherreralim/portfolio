<?php

    ini_set('display_errors',1);

    $name = $_POST["sendName"];
    $mail = $_POST["sendMail"];
    $subject = $_POST["sendSubject"];
    $msg = $_POST["sendMessage"];
    $to = "contactme@gcherreralim.com";

    $messageFull = "Message from: " . $mail . "\n\n" . $msg;
    $header = "From: " . $mail;

    mail($to, $subject, $messageFull, $header);
    header("Location: ./?mailsend");
?>