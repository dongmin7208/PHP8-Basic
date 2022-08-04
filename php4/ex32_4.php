<?php
$arr = [];
$str1 = $_POST['dat1'];
$str2 = $_POST['dat2'];
$str3 = $_POST['dat3'];

array_push($arr, $str1);
echo "입력문자열 : ".$str1."<br>";

array_push($arr, $str2);
echo "입력문자열 : ".$str2."<br>";

array_push($arr, $str3);
echo "입력문자열 : ".$str3."<br>";


$str = join("/", $arr);
echo $str;
