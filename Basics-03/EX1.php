<?php

$personal_details = array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");
function printVal ($array){
    foreach ($array as $key => $value) {
        return "$key=$value\n";
    }
    
}

echo printVal($personal_details);
