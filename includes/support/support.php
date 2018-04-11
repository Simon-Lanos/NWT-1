<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>F.A.Q NWT</title>

    <link rel="stylesheet" href="style.css" />

</head>

<body>

<h1>Formulaire des questions</h1>

<h2>Category</h2>

<select class="category">

    <option value="Category 1">Categorie 1</option>

    <option value="Category 2">Categorie 2</option>

    <option value="Category 3">Categorie 3</option>

    <option value="Category 4">Categorie 4</option>

    <option value="Category 5">Categorie 5</option>

</select>

<h2>Objet de la demande</h2>

<input class="objet" type="text" name="Objet de la ou les questions" required="">

<h2>Votre adresse mail</h2>

<input class="mail" type="email" name="Mettre l'adresse mail" required="">

<h2>Message</h2>

<textarea name="message" rows=4 cols=40></textarea>

<div>

    <input name="recover-submit" class="btn btn-lg btn-warning" value="Envoyer" onclick="location.href='http://localhost:8888/NWT/includes/log/connection.php';" type=submit">


</div>

</body>

</html>