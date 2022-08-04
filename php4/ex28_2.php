<?php
    $str1 = $_POST['upper'];
    $str2 = $_POST['lower'];

    echo $str1."Uppercase -> ";
    $str1 = strtoupper($str1);
    echo $str1."<br>";

    echo $str2."Lowercase -> ";
    $str2 = strtolower($str2);
    echo $str2;
