<?php
$score=array(
    array(90,100,99),
    array(88,80,85),
    array(79,72,74)
);

for($i=0; $i<3; $i++){
    $sum=0;
    for($j=0; $j<3; $j++){
        $sum += $score[$i][$j];
    }
    $ave=$sum/3;
    $no=$i+1;
    echo $no."번학생의 합계 :  ".$sum.", ave : ".$ave."<br>";
}