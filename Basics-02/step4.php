<?php

$number = 407;
$total = 0;

$x = $number;
while ($x != 0) {
    $unit = $x % 10;
    $total = $total + $unit * $unit * $unit;
    $x = $x / 10;
}
if ($number == $total) {
    echo "Yes it is an Armstrong number";
} else {
    echo "No it is not an armstrong number";
}

?>