<?php
    $str = "I love you";
    $findStr = 'o';
    // $pos = strpos($str, $findStr);
    $pos = strrpos($str, $findStr);
    echo "문자열  {$findStr}의 위치는 : ".$pos;