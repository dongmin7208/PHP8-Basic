<?php
$arr = array(100,99,79,80,91);
$sum =array_sum($arr);
$avg = $sum/count($arr);
//arr의 엘리먼트갯수를

echo "sum : ".$sum."<br>";

echo "ave : ".$avg."<br>";

echo "ave : ".number_format($avg,2);