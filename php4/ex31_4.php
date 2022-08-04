<?php
$num = range(1,5);
var_dump($num);
echo "<br>";

$sum=0;
echo "<br><br>";
for($i=0; $i<count($num); $i++ ){
    $sum += $num[$i];
}

echo "배열 요소의 합 : ".$sum;


?>
