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
        <div class="login">
            <h2>Connexion</h2>
            <div class="inputbox">
                <form>
                    <input type="text" name="email" placeholder="  EMAIL">
                    <input type="password" name="password" placeholder="  Mot de passe">
                </form>
            </div>
            <p><a href="http://localhost:8888/NWT/includes/passoubli/passoubli.php"> Mot de passe oublié ?</a></p>
            <button>Connexion</button>
        </div>
        <div class="signup hide">
            <h2>Inscription</h2>
            <div class="inputbox">
                <form value="">
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="firstname" placeholder="Prénom">
                    <div class="sexe">
                        <label>Femme</label>
                        <input type="radio" class="radio" name="sexe" value="female">
                        <label>Homme</label>
                        <input type="radio" class="radio" name="sexe" value="male">
                    </div>
                    <label>Date de Naissance</label>
                    <input type="date" name="birthdate">
                    <input type="text" name="email" placeholder="  EMAIL">
                    <input type="text" name="adresse" placeholder="Votre adresse">
                    <input type="password" name="password" placeholder="  Mot de passe">
                    <input name="monAvatar" type="file">
                    <div class="positionSelect">
                        <select name ="specialite" id="specialite">
                            <option value="develop" selected>Dévelopement</option>
                            <option value="marketing">Marketing</option>
                            <option value="webdesign">Web-design</option>
                            <option value="intervenant">Intervenant</option>
                        </select>
                    </div>
                    <div class="condition">
                        <p>J'accepte les <a href="">conditions d'utilisation</a></p>
                        <input type="checkbox">
                    </div>
                </form>
            </div>
                <button>Inscription</button>
        </div>
    </div>
</div>
<script  src="connect.js"></script>
</body>
</html>