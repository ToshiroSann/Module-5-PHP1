<?php
if(isset($_GET["msg"])){
    echo $_GET["msg"].'<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./insert.php" method="POST" enctype="multipart/form-data">>
    <div>
        <input required id="kenteken" type="text" placeholder="kenteken" name="kenteken"><br>
        <input type="text" placeholder="merk" name="merk"><br>
        <input required type="text" placeholder="kleur" name="kleur"><br>
        <input type="number" placeholder="bouwjaar" name="bouwjaar"><br>
        <input type="text" placeholder="prijs" name="prijs"><br>
        <input type="file" id="myfile" name="the_file"><br>
        <input type="submit">
    </div>
</form>
</body>
</html>