<?php

function factorial($n){
    $x = $n;
    $total = 1;
    while ($x > 1){
        $total = $total * $x;
        $x --;
    }
    return $total;
}
echo factorial(6)

?>
