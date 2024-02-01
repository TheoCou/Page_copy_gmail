<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["mail"];
}

?>

<?php
include_once "./src/head.inc.php";
?>

<body>

    <?php
    include_once "./src/header.inc.php";
    ?>

    <?php
    include_once "./src/scrollbtn.inc.php"
    ?>

    <main>

        <?php
        include_once "./src/home.inc.php"
        ?>


        <?php
        include_once "./src/form.inc.php"
        ?>
    
    </main>
</body>

</html>
