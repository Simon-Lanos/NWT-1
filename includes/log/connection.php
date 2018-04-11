<html>
<head>
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
                <p class="title">Deja un compte ?</p>
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
<<<<<<< HEAD
            <p><a href="http://localhost:8888/NWT/includes/passoubli/passoubli.php"> Mot de passe oublier ?</a></p>
            <button>Connection</button>
=======
            <p>Mot de passe oublier ?</p>
            <button>Connexion</button>
>>>>>>> origin/front
        </div>
        <div class="signup hide">
            <h2>Inscription</h2>
            <div class="inputbox">
                <form value="">
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="firstname" placeholder="Prénom">

                    <input type="text" name="email" placeholder="  EMAIL">
                    <input type="password" name="password" placeholder="  Mot de passe">
                    <div class="positionSelect">
                        <select name ="specialite" id="specialite">
                            <option value="develop" selected>Dévelopement</option>
                            <option value="develop">Marketing</option>
                            <option value="develop">Web-design</option>
                            <option value="develop">Intervenant</option>
                        </select>
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