<?php

function sendLocalEmail($name){
    require '../../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'venitsiana.ilieva@gmail.com';   // SMTP username
    $mail->Password = '123456789simeon';               // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to

    $mail->setFrom('venitsiana.ilieva@gmail.com', 'Venz');
    //$mail->addReplyTo('venitsiana.ilieva@gmail.com', 'Venz');
    $mail->addAddress('venitsiana.ilieva@gmail.com');   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = '<h1>Hello '.$name.'</h1>';
    $bodyContent .= '<p>Thank you sSSSo much</b></p>';

    $mail->Subject = 'test';
    $mail->Body    = $bodyContent;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        die('yes');
    }

}