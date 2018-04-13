<?php
session_start();
?>
<html>
<head>
    <!--salut-->
    <meta charset="UTF-8">
    <title>Connection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="connect.css">
</head>
<body>

<div class="container">

    <div class="backbox">
        <div class="loginMsg">
            <div class="textcontent">
                <p class="title">Vous n'avez pas de compte ?</p>
                <p>inscris toi !</p>
                <button id="switch1">inscription</button>
            </div>
        </div>
        <div class="signupMsg visibility">
            <div class="textcontent">
                <p class="title">Déjà un compte ?</p>
                <p>connecte toi !</p>
                <button id="switch2">connexion</button>
            </div>
        </div>
    </div>
    <div class="frontbox">
        <?php if(!empty($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
<?php include 'connection.php'?>
<?php include 'inscription.php'?>

    </div>
</div>

<script  src="connect.js"></script>
</body>
</html>
