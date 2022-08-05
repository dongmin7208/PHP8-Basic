<?php
    $num=6;
    $cnt=0;

    for($i=2; $i<$num; $i++){
        $cnt++;
        if($num%$i ==0){
            echo "소수가 아닙니다<br>";
            break;
        }
    }
    if($cnt == ($num-2))
    echo "소수입니다.";