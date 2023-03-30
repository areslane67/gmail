<?php

    if(isset($_POST["mail"]) || isset($_POST["psw"])){
    try {
        $reponse = $_bdd->query("SELECT mail, psw FROM  inscription WHERE mail = '{$_POST['mail']}' limit 1");
        $DATA = $reponse->fetch();
        $login = $_POST["mail"];
        $mdp = $_POST["psw"];
        if(!$login || !$mdp){
            echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
        }
        else if(!password_verify($_POST["psw"],$DATA['psw'])){
            echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
        }
    else if(password_verify($_POST["psw"],$DATA['psw']))
    {
        session_start();
        $_SESSION['mail'] = $DATA['mail'];
                                header("Location: connected.php");
                                exit; 
                                
    }
    

    } catch (Exception $e) {
        //throw $th;
    }


}
    

?>
















