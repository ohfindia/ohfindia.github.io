<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try{
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $body = 'Name : ' . $_POST['name'] . "\n"
    . 'Phone Number : ' . $_POST['number'] . "\n"
    . 'Email : ' . $_POST['email'] . "\n"
    . 'Message : ' . $_POST['info'] ;

    // Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'testeradk001@gmail.com'; // YOUR gmail email
    $mail->Password = 'ylgglovsvtijethb'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('testeradk001@gmail.com', 'Sender Name');
    $mail->addAddress('7082chirag@gmail.com', 'Receiver Name');
    $mail->addReplyTo('testeradk001@gmail.com', 'Sender Name'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "New Contact Form Submission";
    $mail->Body = $body;
    // $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>