<?php
$arr = array(10,40,30,20,50);
$arr2 = array('A','C','E','B','D');

print_r($arr);
echo"<br> ------ 정렬 후 -------<br>";
rsort($arr, SORT_NUMERIC);
print_r($arr);
echo"<br><br>";
print_r($arr2);
echo"<br> ------ 정렬 후 -------<br>";
rsort($arr2, SORT_STRING);
print_r($arr2);


?>