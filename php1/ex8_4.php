<?php
    $sum=0;
    for($i=1; $i<=20; $i++){
        if($i%2 ==0){
            $sum=$sum+$i;
        }
    }
    echo "1~10 sum : ".$sum;echo"<br>";