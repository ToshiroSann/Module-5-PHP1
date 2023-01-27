<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

      .challenge1 {
        align-items: center;
        text-align: center;
      }
    </style>
</head>
<body>
<form action="./chall2.php" method="post">

<?php

$cookie_name = "progress";

if (!isset($_COOKIE[$cookie_name])) {
    header("location: ../");
} else {

    if ($_COOKIE[$cookie_name] != 1) {
        header("location: ./" . $_COOKIE[$cookie_name] . "challenge1.php");
        exit();
    }
}
?>

<div class="challenge1">
  <label for="pwd">bereken: 20+10x8</label><br>

<input type="password" id="pwd" name="pwd"><br>

<input type="submit" value="verstuur antwoord">
</form>
</div>



</body>
</html>