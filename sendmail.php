<?php    //Обязательная проверка на пустоту 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailerPHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP(); 
$mail->CharSet = 'UTF-8';
$mail->SMTPAuto = true;
$mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
$mail->Username   = 'artyuxov8@gmail.com'; // Логин на почте
$mail->Password   = '651032769ART1111'; // Пароль на почте
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;
$mail->setFrom('artyuxov8@gmail.com', 'ПРИВЕТ ЭТО АРТЮХ');



// $mail->setLanguage('ru','phpmailer/language/');
$mail->isHTML(true); 

$mail->Subject = 'Привет это вмелия';

$body = '<h1>Это мое письмо</h1>';

$body = '<p> Лавани сошла' .$_POST['date'] '</p>';

$body = '<p> Тело лавины выглядет:' .$_POST['qw2'] '</p>';

$mail->send();

?>