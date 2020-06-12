<?php

$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$opyt = $_POST['experience'];
$english = $_POST['english'];
$skype = $_POST['skype'];
$viber = $_POST['viber'];
$whatsup = $_POST['whatsup'];
$email = $_POST['email'];
$number = $_POST['number'];


$to = "vipladieskiev@gmail.com"; 

$subject = "Заявка с сайта"; 

$message = '<p>Заявка:</p> </br> <b>Имя: '.$name.'</b> </br>';
$message .= '<b>Возраст: '.$age.'</b> </br>';
$message .= '<b>Вес: '.$weight.'</b> </br>';
$message .= '<b>Опыт работы есть?: '.$opyt.'</b> </br>';
$message .= '<b>Владение английским: '.$english.'</b> </br>';
$message .= '<b>Скайп: '.$skype.'</b> </br>';
$message .= '<b>Вайбер: '.$viber.'</b> </br>';
$message .= '<b>Ватсап: '.$whatsup.'</b> </br>';
$message .= '<b>Почта: '.$email.'</b> </br>';
$message .= '<b>Телефон: '.$number.'</b> </br>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: От кого письмо $email\r\n"; 
$headers .= "Reply-To: vipladieskiev@gmail.com\r\n"; 

mail($to, $subject, $message, $headers); 



echo "Ваша анкета успешно отправлена.<br> В ближайшее время мы с Вами свяжемся";