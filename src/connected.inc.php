<?php

class Connected {
    static function connected() {
        // Activer l'affichage des erreurs PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        if (
            isset($_POST['csrf_token'], $_SESSION['csrf_token'], $_POST['email'], $_POST['password']) &&
            $_POST['csrf_token'] === $_SESSION['csrf_token']
        ) {
            $_email = strip_tags($_POST['email']);
            $_password = $_POST['password'];

            // Regex pour vérifier la force du mot de passe
            $regex = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

            // Vérification si les champs email, mot de passe et le format du mot de passe sont corrects
            if ($_email && $_password && preg_match($regex, $_password)) {
                // Connexion à la base de données avec PDO
                $dsn = "mysql:host=localhost;dbname=pagegmail";
                $username = "root";
                $password = "";

                try {
                    $dbh = new PDO($dsn, $username, $password);
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    die("Échec de la connexion : " . $e->getMessage());
                }

                // Préparation de la requête d'insertion
                $stmt = $dbh->prepare("INSERT INTO inscription (name, firstname, email, password) VALUES (?, ?, ?, ?)");
                $stmt->bindParam(1, $_POST['name']);
                $stmt->bindParam(2, $_POST['firstname']);
                $stmt->bindParam(3, $_email);
                $hashed_password = password_hash($_password, PASSWORD_DEFAULT);
                $stmt->bindParam(4, $hashed_password);

                // Exécution de la requête
                try {
                    $stmt->execute();
                    echo "Inscription réussie pour l'adresse email : " . $_email;
                } catch (PDOException $e) {
                    echo "Erreur lors de l'inscription : " . $e->getMessage();
                }

                // Fermeture de la connexion et libération des ressources
                $dbh = null;
            } else {
                echo "Une erreur s'est produite. <a href=\"index.php\">Essayez encore</a>";
            }

            echo "<br>Connexion sécurisée autorisée.";
            unset($_SESSION['csrf_token']);
        } else {
            echo "Erreur lors de la vérification du formulaire.";
        }
    }
}
