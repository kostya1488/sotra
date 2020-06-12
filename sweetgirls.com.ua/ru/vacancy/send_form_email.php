<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "codercchandrey@gmail.com";
    $email_subject = "Your email subject line";

    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['surname']) ||
        !isset($_POST['birthday']) ||
        !isset($_POST['address_city']) ||
        !isset($_POST['address']) ||
        !isset($_POST['metro']) ||
        !isset($_POST['martial']) ||
        !isset($_POST['children']) ||
        !isset($_POST['purpose1']) ||
        !isset($_POST['purpose2']) ||
        !isset($_POST['purpose3']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['eyes_color']) ||
        !isset($_POST['hair_color']) ||
        !isset($_POST['hair_color_natural']) ||
        !isset($_POST['hair_length']) ||
        !isset($_POST['height']) ||
        !isset($_POST['clothe_size']) ||
        !isset($_POST['busts']) ||
        !isset($_POST['job']) ||
        !isset($_POST['experience']) ||
        !isset($_POST['hobby']) ||
        !isset($_POST['foreign_passport']) ||
        !isset($_POST['photo_1']) ||
        !isset($_POST['photo_2']) ||
        !isset($_POST['photo_3']) ||
        !isset($_POST['photo_4']) ||
        !isset($_POST['photo_5']) ||


        !isset($_POST['comment'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $first_name = $_POST['name']; // required
    $last_name = $_POST['surname']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['phone']; // not required
    $comments = $_POST['comment']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$first_name)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }

    if(!preg_match($string_exp,$last_name)) {
        $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }

    if(strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }



    $email_message .= "Имя: ".clean_string($first_name)."\n";
    $email_message .= "Фамилия: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Телефон: ".clean_string($telephone)."\n";
    $email_message .= "Коментарий: ".clean_string($comments)."\n";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <!-- include your own success html here -->

    Thank you for contacting us. We will be in touch with you very soon.

    <?php

}
?>
