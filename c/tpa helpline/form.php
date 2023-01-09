<?php 

require 'PHPMailer/includes/PHPMailer.php';
require 'PHPMailer/includes/SMTP.php';
require 'PHPMailer/includes/Exception.php';

use PHPMailer/PHPMailer/PHPMailer;
use PHPMailer/PHPMailer/SMTP;
use PHPMailer/PHPMailer/Exception;

if(isset($_POST["send"])){
    $mail= new PHPMailer(true); 

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->username = "tpatesting001@gmail.com";
    $mail->password = "dnxqbmsvemvxtihm";
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";

    $mail->setFrom("tpatesting001@gmail.com");

    $mail->addAddress($_POST["email"]); 

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script> alert('Sent Successfully');
    document.location.href = 'index.html';
    </script>
    ";

}

?>