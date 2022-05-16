<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = 'd272d75512ce79';
$phpmailer->Password = 'ff727c871fe8ac';
if(isset($_POST['sub'])){
    //From email address and name
    $from=$_POST['emailToSend'];
    $phpmailer->From = $from; 

    //To address and name
    $phpmailer->addAddress("info@axland.it", "Axland"); //Recipient name is optional

    //Address to which recipient will reply
    //$phpmailer->addReplyTo("reply@yourdomain.com", "Reply");

    //CC and BCC
    //$phpmailer->addCC("alberto.lorena@astir.com");
    //$phpmailer->addBCC("bcc@example.com");
    $subject=$_POST['objectToSend'];
    $phpmailer->Subject = $subject;
    $body=$_POST['bodyToSend'];
    $phpmailer->Body = $body;
    //$phpmailer->AltBody = "This is the plain text version of the email content";

    try {
        $phpmailer->send();
        header("location: http://localhost/axlandAddElements/");
    } catch (Exception $e) {
        echo "Mailer Error: " . $phpmailer->ErrorInfo;
    }
}
?>