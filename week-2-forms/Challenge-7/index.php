<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
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
            $colors = ["red", "yellow", "blue", "green", "orange", "purple", "black", "white", "grey", "brown", "pink", "indigo", "turquoise", "beige"];
            $translatedcolors = ["rood", "geel", "blauw", "groen", "oranje", "paars", "zwart", "wit", "grijs", "bruin", "roze", "indigo", "turquoise", "beige"]; 
            
            shuffle($colors);


            ?>

            <div class="column 1">
                <div style="background-color: <?php echo $colors[1]; ?>" class="number col-1"><span></span></div>
                <div style="background-color: <?php echo $colors[2]; ?>" class="number col-6"><span></span></div>
                <div style="background-color: <?php echo $colors[3]; ?>" class="number col-11"><span></span></div>
            </div>
            <div class="column 2">
                <div style="background-color: <?php echo $colors[4]; ?>" class="number col-2"><span></span></div>
                <div style="background-color: <?php echo $colors[5]; ?>" class="number col-7"><span></span></div>
                <div style="background-color: <?php echo $colors[6]; ?>" class="number col-12"><span></span></div>
            </div>
            <div class="column 3">
                <div style="background-color: <?php echo $colors[7]; ?>" class="number col-3"><span></span></div>
                <div style="background-color: <?php echo $colors[8]; ?>" class="number col-8"><span></span></div>
                <div style="background-color: <?php echo $colors[9]; ?>" class="number col-13"><span></span></div>
            </div>
        </div>
    </div>

</body>

</html>