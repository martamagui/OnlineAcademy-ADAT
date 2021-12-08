<?php
//Class to send emails by using the libary PhpMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

require 'vendor/autoload.php';
//Email config
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.google.com";
$mail->Username = "pruebasmailadat@gmail.com";
$mail->Password = "anesartnoc123";

//Get the email ready
$mail->isHTML(true);
//$mail->addAddress("marta.molina.aguilera@gmail.com");
$mail->addAddress("pruebasmailadat@gmail.com");

$mail->setFrom("pruebasmailadat@gmail.com", "Tienda Online");
$mail->addReplyTo("pruebasmailadat@gmail.com", "alta dirección");
$mail->Subject = "Subscripción a nuestra newsletter";
$content = "<h1>Confirma que llegó</h1>";

//Send
$mail->msgHTML($content);
if ($mail->Send()) {
    echo "todo ok";
} else {
    echo "pos no mi ciela";
}
