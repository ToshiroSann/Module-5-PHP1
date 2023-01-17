<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    for ($x = 1; $x <= 24; $x++) {
        echo "Bingokaart $x <br>";
        ?>

    <div class="clear"></div>
    <div id="cardcenter">
        <div class="card">
            <div class="headers" style="margin-bottom: 60px; margin-top: 5px;">
                <div><span style="color: rgba(236, 29, 35, 1)">B</span></div>
                <div><span style="color: rgba(22, 113, 188)">I</span></div>
                <div><span style="color: rgb(110,55,152)">N</span></div>
                <div><span style="color: rgb(7,177,78)">G</span></div>
                <div><span style="color: rgb(241,104,32)">O</span></div>
            </div>

            <?php
            $colors = [
                ["color" => "red", "translation" => "rood", "textcolor" => "black"],
                ["color" => "yellow", "translation" => "geel", "textcolor" => "black"],
                ["color" => "blue", "translation" => "blauw", "textcolor" => "black"],
                ["color" => "green", "translation" => "groen", "textcolor" => "black"],
                ["color" => "orange", "translation" => "oranje", "textcolor" => "black"],
                ["color" => "purple", "translation" => "paars", "textcolor" => "black"],
                ["color" => "black", "translation" => "zwart", "textcolor" => "white"],
                ["color" => "white", "translation" => "wit", "textcolor" => "black"],
                ["color" => "grey", "translation" => "grijs", "textcolor" => "black"],
                ["color" => "brown", "translation" => "bruin", "textcolor" => "black"],
                ["color" => "pink", "translation" => "roze", "textcolor" => "black"],
                ["color" => "indigo", "translation" => "indigo", "textcolor" => "black"],
                ["color" => "turquoise", "translation" => "turquoise", "textcolor" => "black"],
                ["color" => "beige", "translation" => "beige", "textcolor" => "black"]
            ];

            shuffle($colors);

            ?>

            <div class="column 1">
                <div style="background-color: <?php echo $colors[1]["color"]; ?>" class="number col-1"><span style="color: <?php echo $colors[1]["textcolor"]; ?>"><?php echo $colors[1]["translation"]; ?></span></div>
                <div style="background-color: <?php echo $colors[2]["color"]; ?>" class="number col-6"><span style="color: <?php echo $colors[2]["textcolor"]; ?>"><?php echo $colors[2]["translation"]; ?></span></div>
                <div style="background-color: <?php echo $colors[3]["color"]; ?>" class="number col-11"><span style="color: <?php echo $colors[3]["textcolor"]; ?>"><?php echo $colors[3]["translation"]; ?></span></div>
            </div>
            <div class="column 2">
                <div style="background-color: <?php echo $colors[4]["color"]; ?>" class="number col-2"><span style="color: <?php echo $colors[4]["textcolor"]; ?>"><?php echo $colors[4]["translation"]; ?></span></div>
                <div style="background-color: <?php echo $colors[5]["color"]; ?>" class="number col-7"><span style="color: <?php echo $colors[5]["textcolor"]; ?>"><?php echo $colors[5]["translation"]; ?></span></div>
                <div style="background-color: <?php echo $colors[6]["color"]; ?>" class="number col-12"><span style="color: <?php echo $colors[6]["textcolor"]; ?>"><?php echo $colors[6]["translation"]; ?></span></div>
            </div>
            <div class="column 3">
                <div style="background-color: <?php echo $colors[7]["color"]; ?>" class="number col-3"><span style="color: <?php echo $colors[7]["textcolor"]; ?>"><?php echo $colors[7]["translation"]; ?></span></div>
                <div style="background-color: <?php echo $colors[8]["color"]; ?>" class="number col-13"><span style="color: <?php echo $colors[8]["textcolor"]; ?>"><?php echo $colors[8]["translation"]; ?></span></div>
                <div style="background-color: <?php echo $colors[9]["color"]; ?>" class="number col-8"><span style="color: <?php echo $colors[9]["textcolor"]; ?>"><?php echo $colors[9]["translation"]; ?></span></div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>

</html>