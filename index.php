<?php
session_start();


$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;


?>

<?php
include_once "./src/head.inc.php";

include_once "./src/body.inc.php";
?>

</html>
