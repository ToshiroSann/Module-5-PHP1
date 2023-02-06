<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Merk</th>
            <th>Bouwjaar</th>
            <th>Kleur</th>
            <th>Kenteken</th>
            <th>Prijs</th>
            <img src="" alt="">
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "school";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM `autodb`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $img = "imagee";
            echo "
            <tr>
            <td>" . $row['merk'] . "</td>
            <td>" . $row['bouwjaar'] . "</td>
            <td>" . $row['kleur'] . "</td>
            <td>" . $row['kenteken'] . "</td>
            <td>" . $row['prijs'] . "</td>
            <td><img src='uploads/$row[$img].jpg height='150px' width='300px'></td>
            </tr>
            ";
        }
        ?>
    </table>
</body>

</html>