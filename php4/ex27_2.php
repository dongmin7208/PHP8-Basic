<?php
    $str0= $_POST['in'];
    $str1= $_POST['dat'];
    $str2= $_POST['res'];

    echo "입력된 문자열 : ".$str0."<br>";
    echo "수정전 문자열 : ".$str1."<br>";
    echo "수정할 문자열 : ".$str2."<br>";

    $changeWord = str_replace($str1,$str2, $str0);
    echo $changeWord;