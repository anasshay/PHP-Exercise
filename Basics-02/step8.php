<?php 

function powerOfTwo($n)
{
    if($n >= 0){
        for ($i=0; $i <$n ; $i++) { 
            if (2**$i == $n){
                return "true";
            }
        }
    }
}

echo powerOfTwo(62)
?>