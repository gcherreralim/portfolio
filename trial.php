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

        if(empty($UserName) | empty($Email) | empty($Subject) | empty($Message))
        {
            header('location: trial-form.html?error')
        }
        else{
            $to = "contactme@gcherreralim.com";

            if(mail($to,$Subject,$Message,$Email))
            {
                header("location: trial-form.html?success");
            }
        }
    }
    else
    {
        header("location: trial-form.html");
    }
?>