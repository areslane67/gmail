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
    <link rel="stylesheet" href="./css/style.css">
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
        <section class="one">
            <h1>Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareil</h1>
            <a href="#b">CREE UN COMPTE</a>
        </section>

            <a href="#b" id="z"><img src="./assets/arrow.png" alt="image"></a>
    </main>
    <footer>
        <section>
            <h1>Une boite de réception entiérelent repensée</h1>
            <p>Avec les nouveaux onglets personnalisables, repérez immédiatelent les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité</p>
            <fieldset id="b">
                <legend>Crée un compte</legend>
                <form method="post"> 
                    <label>Nom*
                        <input type="text" name="nom" aria-labelledby="Nom"  id="Nom" placeholder="text" aria-required="true">
                    </label>
                    <label>Prénom*
                        <input type="text" name="prenom" aria-labelledby="Prénom"  id="Prénom" placeholder="text" aria-required="true">
                    </label>
                    <label>Mail ou login*
                        <input type="email" name="mail" aria-labelledby="email"  id="email" placeholder="Mail Utilisateur" aria-required="true" autofocus>
                    </label>
                    <label>Mot de passe*
                        <input type="password" name="psw" aria-labelledby="password" id="password" placeholder="Mot de passe" aria-required="true">
                    </label>
                    <input href="#b" type="submit" aria-label="Envoyer" value="CONNECTION A VOTRE COMPTE" id="ex">
                </form>
                
                <?php
                     //inclusion
                    include_once "./includes/inscription_user.inc.php";
                 ?>

            </fieldset>
        </section>
    </footer>
</body>
</html>