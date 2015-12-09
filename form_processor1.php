<?php

$name = $_POST['ftitle']['name'];
$tel = $_POST['ftitle']['tel'];
$email = $_POST['ftitle']['email'];

if (array_key_exists('ftitle', $_POST)) {

    $to = 'sa@group-fs.com';
    $subject = 'Заявка на консультацию специалиста Group FS';
    $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
    $message = "\r\nЗаявка на консультация отправленна с сайта ".$_SERVER['HTTP_REFERER']."\r\nИмя: ".$name."\r\nТелефон: ".$tel."\r\nEmail: ".$email."\r\n";
    $headers = 'Content-type: text/plain; charset="utf-8"';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: ". date('D, d M Y h(idea)(worry) O') ."\r\n";
    mail($to, $subject, $message, $headers);
    echo 'success';
}
exit();
?>

