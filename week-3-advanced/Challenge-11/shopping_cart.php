<?php
session_start();
$cartdata = json_decode($_SESSION["cart"], true)["products"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/shopping-cart.css">
</head>

<body>
  <div class="wrap cf">
    <h1 class="projTitle">Shopping Cart</h1>
    <div class="heading cf">
      <h1>My Cart</h1>
    </div>
    <div class="cart">
      <ul class="cartWrap">

        <?php
        foreach ($cartdata as $value) {


        ?>

          <li class="items odd">

            <div class="infoWrap">
              <div class="cartSection">
                <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                <h3><?php echo $value; ?></h3>

                <p> $5.00</p>

                <p class="stockStatus"> In Stock</p>
              </div>

            </div>
          </li>

        <?php
        }
        ?>

      </ul>
    </div>
  </div>
</body>

</html>