<?php 
#FOR LOOP EX1
$num = 1234;

function sumDigits($num){
    $x = $num;
    $sum = 0;
    for ($i=0; $i < strlen((string) $num); $i++) { 
        $unit = $x%10;
        $sum = $sum + $unit;
        $x = $x/10;
    }
    return $sum;
}

echo sumDigits(12345);

?>