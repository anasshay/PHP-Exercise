<?php 

function stars($n){
    $x = 0;
    while ($x < $n-1) {
        for ($i=0; $i <= $x ; $i++) { 
            echo "*";
        };
        echo "\n";
        $x ++;
    }
    for ($i=0; $i <=$x ; $i++) { 
        echo "*";
    };
    echo "\n";
    while ($x >= 0) {
        for ($i=0; $i <= $x ; $i++) { 
            echo "*";
        };
        echo "\n";
        $x --;
    }
}

stars(5)
?>