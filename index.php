<?php
    include "./classes/DB.php";
    include "./classes/Login.php";

    $mail = $_POST['mail'];
    $pwd = $_POST['password'];

    $login = new Login();


    if($login->accountExists($mail, $pwd)){
        echo 'Vrooooommm';
    }
    else{
        echo "Pas Vroooommm ";
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>

        <form action="index.php" method="post">
            <label for="User" >Mail</label>
            <input type="text" id="User" name="mail" placeholder="User">
            <label for="Mdp" >Password</label>
            <input type="password" id="Mdp" name="password" placeholder="Mot de passe">
            <input type="submit" value="Envoyer le formulaire tu est baisée ">


        </form>

    </body>
</html>

