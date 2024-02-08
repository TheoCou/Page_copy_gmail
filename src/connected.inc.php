<?php
class Connected{
    static function connected(){

       if (isset($_POST['csrf_token']) && 
       isset($_SESSION['csrf_token']) && 
       $_POST['csrf_token'] === $_SESSION['csrf_token'] && 
       isset($_POST['login']) && isset($_POST['mot_de_passe'])
       )
       {
       
       $_email = strip_tags($_POST['login']);
       $_password = $_POST['mot_de_passe'];

       $regex = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

       $_email && $_password && preg_match($regex, $_password)? print $_surname."inscription valide enregistrée" : 
       print "Une erreur s'est produite <a href=\"index.php\">Essayez encore</a>";

   print "<br>Connexion sécurisée autorisée.";
       unset($_SESSION['csrf_token']);
       } 
   else 
   {
       print "Erreur, réessayez...";
   }

}

}