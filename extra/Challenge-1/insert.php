<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$merk = $_POST["merk"];
$bouwjaar = $_POST["bouwjaar"];
$kleur = $_POST["kleur"];
$kenteken = $_POST["kenteken"];
$prijs = $_POST["prijs"];
// $myfile = $_POST["the_file"];

// $myfilee = "./uploads/";
// $myfileee = file_get_contents($myfile);

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$insert = "INSERT INTO autodb (merk, bouwjaar, kleur, kenteken, prijs, imagee)
VALUES ('$merk', '$bouwjaar', '$kleur', '$kenteken', '$prijs', '$myfile')";

$insert_result = mysqli_query($conn, $insert);

header ("Location: ./result.php");

?>