<?php
$kenteken = $_POST['kenteken'];
$merk = $_POST['merk'];
$bouwjaar = $_POST['bouwjaar'];
$prijs = $_POST['prijs'];
$kleur = $_POST['kleur'];
// $image = $_POST['image'];

$target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["image"]["name"]);
// $images = file_get_contents($_FILES['image']['tmp_name']);

//Datebase Create

$conn = new mysqli('localhost', 'root', '', 'school');
if ($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into autodb (kenteken, merk, bouwjaar, prijs, kleur)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiis",$kenteken, $merk, $bouwjaar, $prijs, $kleur);
    echo("bericht succesvol verzonden....");
    echo("Bedankt voor jouw feedback op onze site");
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>