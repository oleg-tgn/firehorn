<?php
if (!isset($_POST['team'])) {
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
    $Return = getCaptcha($_POST['g-recaptha-response']);

    /*ЕСЛИ ЗАПРОС УДАЧНО ОТПРАВЛЕН И ЗНАЧЕНИЕ score БОЛЬШЕ 0,5 ВЫПОЛНЯЕМ КОД*/
    if($Return->success != true || $Return->score <= 0.5) {
        $message = "You are Robot";
        header("X-Error-Message: $message", true, 500);
        die($message);
    }
}

$team = clean($_POST['team']);
$vk = clean($_POST['vk']);
$phone = clean($_POST['phone']);
$name1 = clean($_POST['name1']);
$name2 = clean($_POST['name2']);
$name3 = clean($_POST['name3']);
$name4 = clean($_POST['name4']);
$name5 = clean($_POST['name5']);


if(empty($team) || empty($vk) || empty($phone) || empty($name1)
    || empty($name1) || empty($name2) || empty($name3) || empty($name4) || empty($name5)) {
    $message = "Не все поля были заполнены корректно, пожалуйста повторите попытку.";
    header("X-Error-Message: $message", true, 500);
    die($message);
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'ssl://smtp.yandex.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'stelmah.oleg@ya.ru';                     // SMTP username
    $mail->Password   = "stelmah@2015";///'stelmah@2015';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('stelmah.oleg@ya.ru', 'Fire Horn League');
    $mail->addAddress('stelmah.taganrog@gmail.com'); // Add a recipient
    $mail->addAddress('iiredii@mail.ru');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "FHL LAN 10.09.20";
    $mail->Body    = "team: " . $team . "<br>" .
          "vk: " . $vk . "<br>" .
          "phone: " . $phone . "<br>" .
          "name1: " . $name1 . "<br>" .
          "name2: " . $name2 . "<br>" .
          "name3: " . $name3 . "<br>" .
          "name4: " . $name4 . "<br>" .
          "name5: " . $name5 . "<br>";
   

    if($mail->send()){
      echo 'Message has been sent';
    }else{
      $message = $mail->ErrorInfo;
      header("X-Error-Message: $message", true, 500);
      die($message);
    }

} catch (Exception $e) {
    $message = $mail->ErrorInfo;
    header("X-Error-Message: $message", true, 500);
    die($message);
}