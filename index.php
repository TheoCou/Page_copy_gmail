<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["mail"];
}

$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;


?>

<?php
include_once "./src/head.inc.php";

include_once "./src/body.inc.php";
?>

</html>
