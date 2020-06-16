<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $name = $_GET['name'];
    $subject = $_GET['subject'];
    $mailFrom = $_GET['mail'];
    $message = $_GET['message'];
    $to = "contactme@gcherreralim.com"
    $headers = "From:" . $mailFrom;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>