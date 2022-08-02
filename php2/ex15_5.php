<?php
    $sum=0;
    for($i=1; $i<=10; $i++){
        $num = rand(1,50);
        $sum +=$num;
        echo $num."<br>";
    }
    $ave=$sum/10;
    echo "난수의 합 : ".$sum."<br>";
    echo "난수의 평균 : ".$ave."<br>";