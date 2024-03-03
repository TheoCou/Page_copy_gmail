<section class="form">
    
    <fieldset id="connection">
        <legend>Connectez-vous à votre compte</legend>
        <form method="post">
            
            <label for="login">Mail</label> <br>
            <input type="text" id="login" name="login" placeholder="Votre mail" aria-required="true"> <br>

            <label for="password">Mot de passe</label> <br>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true"> <br>

            <input type="hidden" name="csrf_token" value="<?= $token; ?>">

            <input type="submit" id="submit" value="Connexion à votre compte" aria-label="Valider">
        </form>
    </fieldset>

    <?php
    include_once "./src/log.inc.php";
    ?>
</section>