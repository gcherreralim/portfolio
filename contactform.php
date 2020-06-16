// <?php
//     ini_set( 'display_errors', 1 );
//     error_reporting( E_ALL );
// //     $name = $_GET['name'];
// //     $subject = $_GET['subject'];
// //     $mailFrom = $_GET['mail'];
// //     $message = $_GET['message'];
//     $name = "Gabby";
//     $subject = "Hello";
//     $mailFrom = "gcherreralim@gmail.com";
//     $message = "Hello";
//     $to = "contactme@gcherreralim.com";
//     $headers = "From:" . $mailFrom;
//     mail($to,$subject,$message, $headers);
//

<?php

    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

    if(isset($_POST['submit']))
    {
        $UserName = $_POST['sendName'];
        $Email = $_POST['sendMail'];
        $Subject = $_POST['sendSubject'];
        $Message = $_POST['sendMessage'];

        if(empty($UseName) | empty($Email) | empty($Subject) | empty($Message))
        {
            header('location: index.html?error')
        }
        else{
            $to = "contactme@gcherreralim.com";

            if(mail($to,$Subject,$Msg,$Email))
            {
                header("location:index.html?success");
            }
        }
    }
    else
    {
        header("location: index.html");
    }
?>
