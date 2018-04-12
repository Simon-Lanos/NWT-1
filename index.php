<?php
include "./functions/AutoLoad.php";
spl_autoload_register('AutoLoad');
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8" />
    <title>NWT</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>
    <body>
        <div id="container">
            <?php
            include "./includes/header.php";
            CallPage::display();
            include "./includes/footer.php";
            ?>
        </div>
    </body>
</html>
