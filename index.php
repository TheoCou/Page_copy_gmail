<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["mail"];
}
?>

<?php
include_once "./src/head.inc.php";

include_once "./src/body.inc.php";
?>

</html>
