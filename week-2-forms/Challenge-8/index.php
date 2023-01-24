<?php

echo "24h Clock";

date_default_timezone_set("Europe/Amsterdam");
echo "<br><br>The time in Amsterdam: <br> " . date("H:i:s");

date_default_timezone_set("America/New_York");
echo "<br><br>The time in New York: <br> " . date("H:i:s");

date_default_timezone_set("Australia/Sydney");
echo "<br><br>The time in Sydney: <br> " . date("H:i:s");

echo "<br><br>Date";
echo "<br>" . date("l") . "<br>";

date_default_timezone_set("Europe/Amsterdam");

echo "<br><br>Today is " . date("d/m/Y") . "<br>";
echo "<br<br>Today is " . date("l");

echo "<br><br>My birthday is in<br>";

$birthday = "3th June";
$days = round(abs(strtotime($birthday)-time()) / 86400);
echo $days." days";

$date1 = '2006-06-03';
$date2 = '2023-01-19';

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

$diff = (($year2 - $year1) * 12) + ($month2 - $month1);

echo "<br><br>".$diff." months till my birthday.";


?>