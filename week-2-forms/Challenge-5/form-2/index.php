<form action="./form2results.php" method="POST">

    <input required type="Email" placeholder="Email" name="email">
    <input required type="text" placeholder="password" name="password">

    <input type="submit" value="Submit" name="submit">
</form>

<?php
if (isset($_GET["msg"])) {
    echo ($_GET["msg"]);
}
?>