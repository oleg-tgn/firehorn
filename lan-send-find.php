<?php

if (!isset($_POST['name'])) {
    header("Location: /"); 
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'include/PHPMailer/Exception.php';
require 'include/PHPMailer/PHPMailer.php';
require 'include/PHPMailer/SMTP.php';

require 'include/filter.php';

if ($_POST) {
    /*ПРОИЗВОДИМ ЗАПРОС НА GOOGLE СЕРВИС И ЗАПИСЫВАЕМ ОТВЕТ*/
    $Return = getCaptcha($_POST['g-recaptha-response-find']);

    /*ЕСЛИ ЗАПРОС УДАЧНО ОТПРАВЛЕН И ЗНАЧЕНИЕ score БОЛЬШЕ 0,5 ВЫПОЛНЯЕМ КОД*/
    if($Return->success != true || $Return->score <= 0.5) {
        $message = "You are Robot";
        header("X-Error-Message: $message", true, 500);
        die($message);
    }
}

$name = clean($_POST['name']);
$vk = clean($_POST['vk']);
$rank = clean($_POST['rank']);
$position = clean($_POST['position']);

if(empty($name) || empty($vk) || empty($rank) || empty($position)) {
    $message = "Не все поля были заполнены корректно, пожалуйста повторите попытку.";
    header("X-Error-Message: $message", true, 500);
    die($message);
}


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'ssl://smtp.yandex.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'stelmah.oleg@ya.ru';                     // SMTP username
    $mail->Password   = 'stelmah@2015';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('stelmah.oleg@ya.ru', 'Fire Horn League');
    $mail->addAddress('stelmah.taganrog@gmail.com'); // Add a recipient
     $mail->addAddress('iiredii@mail.ru');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "FHL LAN 10.09.20: find team";
    $mail->Body    = "name: " . $name . "<br>" .
          "vk: " . $vk . "<br>" .
          "rank: " . $rank . "<br>" .
          "position: " . $position . "<br>";
   

    if(!$mail->send()) {
      $message = $mail->ErrorInfo;
      header("X-Error-Message: $message", true, 500);
      die($message);
    } else {
      echo 'Message has been sent.';
    }
} catch (Exception $e) {
    $message = $mail->ErrorInfo;
    header("X-Error-Message: $message", true, 500);
    die($message);
}