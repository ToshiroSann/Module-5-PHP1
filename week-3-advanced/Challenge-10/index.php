<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<?php
$cookie_name = "progress";

if (!isset($_COOKIE[$cookie_name])) {

    $cookie_value = 1;
    setcookie($cookie_name, $cookie_value, 2147483647, "/");

    $isnew = true;

} else {

    $isnew = false;

}
?>
<body>
    <div class="main">
        <p>Druk op Start om te beginnen</p>
        <button><a href="challenge1.php">Start</a></button>
    </div>
</body>
</html>