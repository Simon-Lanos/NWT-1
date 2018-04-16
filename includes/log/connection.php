<?php

/*****************************************
 *  Constantes et variables
 *****************************************/
define('LOGIN','Rasmus');  // Login correct
define('PASSWORD','lerdorf');  // Mot de passe correct
$message = '';      // Message à afficher à l'utilisateur

/*****************************************

 *  Vérification du formulaire
 *****************************************/
// Si le tableau $_POST existe alors le formulaire a été envoyé
if(!empty($_POST))
{
    // Le login est-il rempli ?
    if(empty($_POST['email']))
    {
        $message = 'Veuillez indiquer votre login svp !';
    }
    // Le mot de passe est-il rempli ?
    elseif(empty($_POST['password']))
    {
        $message = 'Veuillez indiquer votre mot de passe svp !';
    }
    // Le login est-il correct ?
    elseif($_POST['email'] !== LOGIN)
    {
        $message = 'Votre email est faux !';
    }
    // Le mot de passe est-il correct ?
    elseif($_POST['password'] !== PASSWORD)
    {
        $message = 'Votre mot de passe est faux !';
    }
    else
    {
        // L'identification a réussi
        $message = 'Bienvenue '. LOGIN .' !';
    }
}
?>

<div class="login">
<h2>Connexion</h2>
<div class="inputbox">
<form>
<input type="text" name="email" placeholder="  EMAIL">
<input type="password" name="password" placeholder="  Mot de passe">
</form>
</div>
<p><a href="./includes/passoubli/passoubli.php"> Mot de passe oublié ?</a></p>
<button>Connexion</button>
</div>

