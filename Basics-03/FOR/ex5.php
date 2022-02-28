<?php 

$sentence = "Hello I am Anass";

function reverse($sentence)
{
    $array = "";
    for ($i=strlen($sentence)-1; $i >=0 ; $i--) { 
        $array = $array . $sentence[$i];
    }
    return $array . "\n";
}

echo reverse($sentence);