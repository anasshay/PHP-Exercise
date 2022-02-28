<?php 
$text = "one two three four three, five six three.";
$word = "three";

function isPresent($text, $word){
    $arrayText = preg_split('/[.|,| ]/', $text);
    // foreach ($arrayText as $key => $value) {
    //     echo $value . "\n";
    // }
    print_r($arrayText);
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
echo isPresent($text, $word);

?> 