<?php 
$str = 'text Python text';
function replace($str){
    return str_replace("Python","PHP",$str);
}

echo replace($str);
?>