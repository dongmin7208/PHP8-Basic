<?php

    $n=1;
    $cnt = 0;
    
    while($n<=50){
        if($n%3 == 0)$cnt++;
        $n++;
    }


    echo "1~ 50    3の倍数배수 ? : ".$cnt;
?>