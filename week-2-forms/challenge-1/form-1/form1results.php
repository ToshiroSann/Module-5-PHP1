<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>results</title>
    <?php
    $color = $_GET["color"];
    ?>
    <style>
        body {
            background-color: <?php echo $color ?>;
        }
    </style>
</head>
<body>

<?php
$age = $_GET["leeftijd"];
$multiplyn = 4;
$multi = $age * $multiplyn;





echo $_GET["voornaam"] ." ". $_GET["tussenvoegsel"] ." ". $_GET["achternaam"] . "<br>" . $multi;


?>

</body>
</html>

