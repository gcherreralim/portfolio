<html>
<body>
<?php
    $name = $_POST["sendName"];
    $mail = $_POST["sendMail"];
    $subject = $_POST["sendSubject"];
    $msg = $_POST["sendMessage"];

    echo $name;
    echo $mail;
    echo $subject;
    echo $msg;
?>
</body>
</html>