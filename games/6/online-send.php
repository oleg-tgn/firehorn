<?php

if (!isset($_POST['team'])) {
    header("Location: /online.php"); 
    exit();
}

$team = $_POST['team'];
$vk = $_POST['vk'];
$phone = $_POST['phone'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$name4 = $_POST['name4'];
$name5 = $_POST['name5'];
$name6 = $_POST['name6'];
$name7 = $_POST['name7'];


$team = htmlspecialchars($team); 
$vk =  htmlspecialchars($vk); 
$phone = htmlspecialchars($phone);
$name1 = htmlspecialchars($name1);
$name2 = htmlspecialchars($name2);
$name3 = htmlspecialchars($name3);
$name4 = htmlspecialchars($name4);
$name5 = htmlspecialchars($name5);
$name6 = htmlspecialchars($name6);
$name7 = htmlspecialchars($name7);



$to = 'stelmah.taganrog@gmail.com, iiredii@mail.ru';
$subject = "FHL Online 24.02";
$message = "team: " . $team . "<br>" .
          "vk: " . $vk . "<br>" .
          "phone: " . $phone . "<br>" .
          "name1: " . $name1 . "<br>" .
          "name2: " . $name2 . "<br>" .
          "name3: " . $name3 . "<br>" .
          "name4: " . $name4 . "<br>" .
          "name5: " . $name5 . "<br>" .
          "name6: " . $name6 . "<br>" .
          "name7: " . $name7 . "<br>";

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=UTF-8' . "\r\n" .
            'To: Oleg <stelmah.taganrog@gmail.com>, Andrey <iiredii@mail.ru>, Nastya <skripniktest@gmail.com>'. "\r\n" .
            'From: Fire Horn League <admin@fire-horn.ru>'. "\r\n";

if (mail($to, $subject, $message, $headers)) {
    header("Location: pay.php?team=". $team );
} else {
    header("Location: index.php?register=false");
}