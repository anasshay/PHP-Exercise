<?php

$num = 123;
$sum=0;
$x = $num;
for ($i = 0; $i < strlen($num); $i++) {
    $unit = $x % 10;
    $sum = $sum + $unit;
    $x = $x / 10;
}
echo $sum;
?>