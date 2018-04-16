<?php
$firstName = 'connard';
$lastName = 'de merde';
$token = hash("sha256", crypt(microtime(), "NWTroll"));
echo $token;
$tokenTime = date_format(date_create(),'Y-m-d H:i:s');
echo $tokenTime;

$sql = 'SELECT userToken FROM nwtdb.users WHERE userId = "1"';
$db = new DB();
$stmt = $db->select($sql);

$to = 'test@yolo.fr';
$subject = 'yolo test';
$message = '
    <html>
    <head>
        <title>Confirmation de votre Inscription</title>
    </head>
    <body>
    <p>Bonjour</p>' . $firstName . ' ' . strtoupper($lastName) . '
    <p>Pour confirmer votre insciption veuiller cliquer sur le boutton si dessous</p>
    <a href="localhost/nwt/?token=' . $token . '">
        <img src="https://image.noelshack.com/fichiers/2018/15/5/1523612366-buttonvalidation.png" />
    </a>
    </body>
    </html>
';
$mail = new Mail($to, $subject, $message);
$mail->sendMail();

=======
include './includes/log/enregistrement.php';
