<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $to = "contactme@gcherreralim.com"
    $headers = "From:" . $mailFrom;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>