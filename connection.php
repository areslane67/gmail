<?php
    session_start();
    include_once("./includes/data.inc.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF
    -8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connection.css">
    <link rel="icon" href="./assets/mail.png">
    <title>Gmail</title>
</head>
<body>
    <header>
        <ul class="gmail">
            <li><a href="./index.php"><img src="./assets/images.png" alt=""></a></li>
            <li><a href="./index.php"><p>Gmail</p></a> </li>
        </ul>
        <ul class="droite">
            <li><a href="https://workspace.google.com/products/gmail/index.html?utm_source=gmailforwork&utm_medium=et&utm_campaign=nav&utm_content=forwork" class="hov">pour les pros</a></li>
            <li><a href="./connection.php" class="rouge">connection</a></li>
            <li><a href="./index.php" class="hov">créer un compte</a></li>
        </ul>
    </header>
    <main>
        <fieldset>
            <legend>Connectez-Vous a votre compte</legend>
            <form action="#ex" method="post"> 
                <label>Mail ou login*
                    <input type="email" name="mail" aria-labelledby="email"  id="email" placeholder="Mail Utilisateur" aria-required="true" autofocus>
                </label>
                <label>Mot de passe*
                    <input type="password" name="psw" aria-labelledby="password" id="password" placeholder="Mot de passe" aria-required="true">
                </label>
                <input type="submit" aria-label="Envoyer" value="CONNECTION A VOTRE COMPTE" id="ex">
            </form>
            <?php
                include_once("./includes/login.inc.php");
            ?>

        </fieldset>
    </main>
</body>
</html>