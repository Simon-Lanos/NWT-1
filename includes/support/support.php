<html>
<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>F.A.Q NWT</title>
    <link rel="stylesheet" href="support.css" />
</head>
<body>
    <div id="mainwrapper">
        <h1>Formulaire des questions</h1>
        <div id="content">
            <h2>Objet de la demande</h2>
                <input class="objet" type="text" name="Objet de la ou les questions" required placeholder="">
            <h2>Votre adresse mail</h2>
                <input class="mail" type="email" name="Mettre l'adresse mail" required placeholder="votre email">
            <h2>Message</h2>
                <textarea name="message" rows=4 cols=40></textarea>
            <div>
                <input name="recover-submit" class="btn btn-lg btn-warning" value="Envoyer" onclick="location.href='http://localhost:8888/NWT/includes/log/connection.php';" type=submit">
            </div>
        </div>
    </div>
</body>
</html>