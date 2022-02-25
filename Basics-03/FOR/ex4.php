<?php

// echo "*******";
// echo PHP_EOL;

function Z($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == 0 || $i == $j || $i == $n - 1) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }
}
Z(6)

?>