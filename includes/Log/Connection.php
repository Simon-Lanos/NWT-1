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
                <button id="switch2">connection</button>
            </div>
        </div>
    </div>

    <div class="frontbox">
        <div class="login">
            <h2>Connection</h2>
            <div class="inputbox">
                <input type="text" name="email" placeholder="  EMAIL">
                <input type="password" name="password" placeholder="  Mot de passe">
            </div>
            <p>Mot de passe oublier ?</p>
            <button>Connection</button>
        </div>

        <div class="signup hide">
            <h2>Inscription</h2>
            <div class="inputbox">
                <form value="">
                    <input type="text" name="fullname" placeholder="  Nom & Prénom">
                    <input type="text" name="email" placeholder="  EMAIL">
                    <input type="password" name="password" placeholder="  Mot de passe">

                    <select name ="specialite" id="specialite">
                        <option value="develop" selected>Dévelopement</option>
                        <option value="develop">Marketing</option>
                        <option value="develop">Web-design</option>
                        <option value="develop">Intervenant</option>
                    </select>
                </form>

            </div>
                <button>Connection</button>
        </div>

    </div>

</div>

<script  src="connect.js"></script>

</body>

</html>