<?php
 try {
    $_bdd=new PDO('mysql:host=localhost;dbname=pagegmail;charset=utf8', 'root', '');
         }catch (Exception $e) {
                      die('Erreur : '.$e->getMessage());
                  }
//bdd ouverte

//traitement
if (isset($_POST['login']) || isset($_POST['password'])) {
    $_elogin = $_POST["login"];

    //on test les chaines de caractère//
    if (!$_POST['login'] || !$_POST['password']){
        echo "<p class=\"warning\">Vous avez obliez votre login ou password?</p>";
        }elseif (!filter_var($_elogin, FILTER_VALIDATE_EMAIL)){
            echo "<p class=\"warning\">login invalide</p>";
        }elseif (is_numeric($_elogin)){
                echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
        }else {        
        $req = $_bdd->prepare('INSERT INTO inscription (login, password)VALUES(?,?)');
        $req->execute(array($_POST['login'], password_hash($_POST['password'],PASSWORD_DEFAULT)));
        
        echo "<p class=\"success\">Merci, votre compte a bien été crée :
                <a href=\"log.php\" title=\"pub\">Connectez vous</a>
                
        </p>";
        
    }
    
}