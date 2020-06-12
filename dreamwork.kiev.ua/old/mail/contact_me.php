<?php
/**
 * Created by PhpStorm.
 * User: admin-1
 * Date: 11.11.2017
 * Time: 14:29
 */

$admin_email = 'vipladies@gmail.com';

$name = $_POST['name'];
$vacancy = $_POST['vacancy'];
$phone = $_POST['phone-number'];


$headers = "From: Заявка\r\nContent-type: text/html; charset=utf8 \r\n;"; // от кого

// формируем тело сообщения
$message = "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <title>Title</title>
                </head>
                <body>
                
                <p>Имя: $name</p>
                <p>Вакансия: $vacancy</p>
                <p>Телефон: $phone</p>
                 
                </body>
                </html>";


// кодируем заголовок в UTF-8
$subject = "Заявка с сайта";

// отправка
mail($admin_email, $subject, $message, $headers);

