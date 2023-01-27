<?php
session_start();

if (isset($_SESSION["ingelogd"])) {
  if ($_SESSION["ingelogd"] == true) {
    header("location: ./home.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webshop</title>
</head>

<body>

  <main>
<br>
    <form method="POST" action="./assets/server/login.php">
      <input type="text" placeholder="email" name="email" required>
      <br><br>
      <input type="password" placeholder="password" name="password" required>
      <br><br>
      <input type="submit" name="submit" value="Confirm">
    </form>
    <?php
    if (isset($_GET["msg"])) {
    ?>
      <p style="color: red"><?php echo $_GET["msg"] ?></p>
    <?php
    }
    ?>
  </main>
</body>

</html>