<?php

$startTime = mktime(0,0,0,1,1,2022);
$endTime = mktime(0,59,59,1,1,2022);
$nowTime = time();
if($nowTime >= $startTime && $nowTime <= $endTime){
    echo "現在参加できる時間です。";
}else {
    echo "時間終了です。";
}

