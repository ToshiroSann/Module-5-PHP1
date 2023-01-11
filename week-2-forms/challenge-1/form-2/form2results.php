<?php

$correct_email = "owenlaw@gmail.com";
$correct_password = "1234";

if (isset($_POST["submit"]) && isset($_POST["email"]) && isset($_POST["password"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == $correct_email && $password == $correct_password) {
        echo ("Welkom " . $email);
    } else {
        header("location: ./index.php?msg=Je hebt geen toegang tot deze pagina.");
    }

} else {
    header("location: ./index.php");
    exit();
}

?>