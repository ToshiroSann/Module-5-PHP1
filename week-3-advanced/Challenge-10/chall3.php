<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>


<?php
$correctpassword = "het antwoord";



if( $_POST["pwd"] == $correctpassword){



echo "goed gedaan op naar de volgende ".$_POST["pwd"]."!<br>";

header('Refresh: 1; URL=challenge4.php');

}else{

    echo "Fout, probeer opnieuw!";
    header('Refresh: 1; URL=challenge1.php');

}

?>
</body>
</html>