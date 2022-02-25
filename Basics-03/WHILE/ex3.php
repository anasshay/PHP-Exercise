<?php 
$text = "one two three four three five six three";
$word = "three";

function isPresent($text, $word){
    $arrayText = explode(" ", $text);
    $count = 0;
    $x=0;

    while ($x < sizeof($arrayText)) {
        if($word == $arrayText[$x]){
            $count++;
        }
        $x++;
    }
    return $count;
};
// $arrayText = explode(" ", $text);
// echo in_array($word,$arrayText)

echo isPresent($text, $word);

?> 