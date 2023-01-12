<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/SMTP.php';


function emailResume($name, $email, $number, $salary, $remarks, $code, $file_name){
    // passing true in constructor enables exceptions in PHPMailer
    $mail = new PHPMailer(true);

    try{

        $body = 'Name : ' . $name . "<br/>"
        . 'Email : ' . $email . "<br/>"
        . 'Phone Number : ' . $number . "<br/>"
        . 'Salary : ' . $salary . "<br/>"
        . 'Remarks : ' . $remarks . "<br/>"
        . 'Code : ' . $code ;

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
        $mail->setFrom('testeradk001@gmail.com', 'AGRTS Email Service');
        $mail->addAddress('info@agrts.com', 'Info - AGRTS');

        // Setting the email content
        $mail->IsHTML(true);
        $mail->Subject = "New Recruitment Form Submission";
        $mail->Body = $body;
        $mail->addAttachment('resumes/'.$file_name);
        // $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

        $mail->send();
        return true;
    } catch (Exception $e) {
        // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
    }
    return false;
}

?>