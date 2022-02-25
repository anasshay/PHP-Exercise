<?php 

function stars($n){
    $x = 0;
    while ($x < $n) {
        for ($i=0; $i <= $x ; $i++) { 
            echo "*";
        };
        echo "\n";
        $x ++;
    }
}

stars(2)
?>