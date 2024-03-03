<section class="form">
    <h3>Une boîte de réception entièrement repensée</h3>
    <h4>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité.</h4>

    <fieldset id="connection">
        <legend>Créer un compte</legend>
        <form method="post">
            <label for="name">Nom*</label> <br>
            <input type="text" id="name" name="name" placeholder="Votre nom" aria-required="true"> <br>

            <label for="firstname">Prénom*</label> <br>
            <input type="text" id="firstname" name="firstname" placeholder="Votre prénom" aria-required="true"> <br>

            <label for="login">Mail*</label> <br>
            <input type="text" id="login" name="login" placeholder="Votre mail" aria-required="true"> <br>

            <label for="password">Choisir votre mot de passe*</label> <br>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true"> <br>

            <input type="hidden" name="csrf_token" value="<?= $token; ?>">

            <input type="submit" id="submit" value="Valider votre compte" aria-label="Valider">
        </form>
    </fieldset>

    <?php
    require_once __DIR__ . "/inscription.inc.php";
    
    ?>
</section>