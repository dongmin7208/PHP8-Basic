<?php
$point = "1300/3600/9000/200";
$arr= explode("/",$point);

for($i=0;$i<count($arr); $i++){
    echo $arr[$i]."数<br>";
}
$score= "100,99,95,88";

$arr2 = explode(',',$score);
$sum=0;
for($i=0; $i<count($arr2); $i++){
    echo $arr2[$i]."数<br>";
    $sum += $arr2[$i];
}

$ave = $sum/count($arr2);

echo "sum : ".$sum;
echo "<br>";
echo "ave : ".$ave;
