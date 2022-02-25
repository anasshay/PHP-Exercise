<?php

function check_palindrom($str)
{
    $str = str_replace(" ", "", $str);
    if (strrev($str) == $str) {
        return true;
    } else {
        return false;
    };
}

echo check_palindrom('nurses run');
?>