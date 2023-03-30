<?php
    session_start();
    include_once("./includes/data.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/yes.css">
    <link rel="icon" href="./assets/mail.png">
    <title>Gmail</title>
</head>
<body>
    <header>
        <ul class="gmail">
            <li><a href="./index.php"><img src="./assets/images.png" alt="image"></a></li>
            <li><a href="./index.php"><p>Gmail</p></a> </li>
        </ul>
        <ul class="droite">
            <li><a href="https://workspace.google.com/products/gmail/index.html?utm_source=gmailforwork&utm_medium=et&utm_campaign=nav&utm_content=forwork" class="hov">pour les pros</a></li>
            <li><a href="./connection.php" class="hov">connexion</a></li>
            <li><a href="#b" class="rouge">créer un compte</a></li>
        </ul>
    </header>
    <main>
    <?php
    include_once("./includes/login.inc.php");
    echo "<p class=\"success\">Bonjour ".$_SESSION['mail'];
    ?>
    </main>
</body>
</html>