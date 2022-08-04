<?php
    $str1 = "apple, banana, orange";
    $str2 = 'dog cat rabbit';
    echo ucfirst($str1)."<br>";
    echo ucfirst($str2)."<br>";

    echo "-----------------<br>";

    echo ucwords($str1)."<br>";
    $str2 = ucwords($str2);
    echo $str2."<br>";