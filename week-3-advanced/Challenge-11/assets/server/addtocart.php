<?php

session_start();

if (isset($_POST["productname"]) != true) {
    exit();
}

$product = $_POST["productname"];
$cart = $_SESSION["cart"];

$cartdata = json_decode($cart, true);

array_push($cartdata["products"], $product);

$cartdata = json_encode($cartdata);

$_SESSION["cart"] = $cartdata;

header("location: ../../shopping_cart.php");