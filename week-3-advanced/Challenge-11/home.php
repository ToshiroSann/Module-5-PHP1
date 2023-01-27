<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webshop</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <nav>
    <ul>
      <li><a href="./shopping_cart.php">Shopping-cart</a></li>
      <li class="logo">Webshop</li>
      <?php
      if(isset($_SESSION["ingelogd"])){
      if ($_SESSION["ingelogd"] != false) {
      ?>
        <li><a href="./assets/server/logout.php">Logout</a></li>
        <li><?php echo $_SESSION["email"] ?></li>
      <?php
      } else {
      ?>
        <a style="margin-right: 15px;" href="./login.php">Login</a>
      <?php
      }
    }else{
      ?>
      <a style="margin-right: 15px;" href="./login.php">Login</a>
      <?php
    }
      ?>
    </ul>
  </nav>
  <main>
    <div class="container">
      <div class="boxes">

        <?php
        for ($n = 1; $n <= 10; $n++) {

        ?>

          <form method="POST" action="./assets/server/addtocart.php">
            <div class="box">
              <p style="margin-bottom: 5px;"><?php echo "Item ".$n ?></p>
              <img src="https://via.placeholder.com/300" alt="#">
              <input type="hidden" name="productname" value="<?php echo "Item ".$n ?>">
              <input style="margin-top: 10px;" type="submit" value="add to cart">
            </div>
          </form>

        <?php
        }
        ?>

      </div>
    </div>
  </main>
</body>

</html>