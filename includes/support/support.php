<html>
<head>
    <title>FAQ</title>
    <link rel="stylesheet" href="support.css">
</head>
<body>
<form id="contact">
    <div class="container">
        <div class="head">
            <h2>Un Problème ?</h2>
        </div>
        <input type="text" name="name" placeholder="Name" /><br />
        <input  type="email" name="email" placeholder="Email" /><br />
        <input type="text" name="objet" placeholder="Objet de votre demande" /><br />
        <textarea type="text" name="message" placeholder="Message"></textarea><br />
        <div class="message">Message Sent</div>
        <button id="submit" type="submit">Send!</button>
        <input name="recover-submit" class="button" value="retour" onclick="location.href='http://localhost:8888/NWT/includes/log/connection.php';" type="submit">
    </div>
</form>
<script src="support.js"></script>
</body>
</html>