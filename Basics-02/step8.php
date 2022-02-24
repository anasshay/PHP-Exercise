<?php 

function powerOfTwo($n)
{
    if($n >= 0){
        if($n % 2 == 0){
            return $n . " is power of 2";
        }
    }
}

echo powerOfTwo(125)
?>