// <? php
//
// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
//     $mailFrom = $_POST['mail'];
//     $message = $_POST['message'];
//
//     $mailTo = "contactme@gcherreralim.com";
//     $headers = "From: $mailFrom";
//     $txt = "You have received an e-mail from $name \n\n $message";
//
//     mail($mailTo, $subject, $txt, $headers);
//     header("Location: index.html?");
//
//     }
//
//
<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "contactme@gcherreralim.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>