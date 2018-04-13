<?php

$firstName = 'connard';
$lastName = 'de merde';

$to = 'test@yolo.fr';
$subject = 'yolo test';
$message = '
    <html>
    <head>
        <title>Confirmation de votre Inscription</title>
    </head>
    <body>
    <p>Bonjour</p>' . $firstName . strtoupper($lastName) . '
    <p>Pour confirmer votre insciption veuiller cliquer sur le boutton si dessous</p>
    <a href="localhost/coursphp/index.php/?page=home&token= ' . $token . ' "></a>
    </body>
    </html>
';
//$mail = new Mail($to, $subject, $message);
//$mail->sendMail();
