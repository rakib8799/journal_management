<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function send_mail($receiver, $subject, $body)
{
    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);
    $sender_email = 'mkrakib007@gmail.com';
    $sender_pass = 'enfcwjihphfedbeq';

    $mail->SMTPDebug = 0;

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username = $sender_email;

    $mail->Password = $sender_pass;

    $mail->Port = 587;

    $mail->setFrom($sender_email, 'JKKNIU');

    $mail->addAddress($receiver);
    $mail->addReplyTo($sender_email);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $body;
    if ($mail->send()) {
        $mail->ClearAddresses();
        $mail->clearReplyTos();
    }
}
