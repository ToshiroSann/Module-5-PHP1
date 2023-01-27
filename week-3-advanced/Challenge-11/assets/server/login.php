<?php

session_start();

if (isset($_POST["submit"]) != true || isset($_POST["email"]) != true || isset($_POST["password"]) != true) {
    exit();
}

$correctemail = "test@test.nl";
$correctpassword = "tEst";

$email = $_POST["email"];
$password = $_POST["password"];
$emptycart = '{"products":[]}';

if ($email == $correctemail && $password == $correctpassword) {
    $_SESSION["ingelogd"] = true;
    $_SESSION["email"] = $email;
    $_SESSION["cart"] = $emptycart;

    header("location: ../../home.php");
}else{
    header("location: ../../login.php?msg=Incorrect username or password.");
}
