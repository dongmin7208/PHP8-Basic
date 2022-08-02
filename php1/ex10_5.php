<?php

    $n=1;
    $sum = 0;
    
    while($n<=20){
        if($n%2 == 0){
            $sum += $n;
        }
        $n++;
    }

    echo "1~ 20 even ? : ".$sum;
?>