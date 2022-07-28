<?php
$arr=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

$res = $arr[0][0]+$arr[0][2]+$arr[1][1]+$arr[2][0]+$arr[2][2];

echo"X type - data -Sum: ".$res;
?>