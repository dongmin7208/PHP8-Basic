<?php
    $sum=0;
    $cnt=0;
    for($i=1; $i<=20; $i++){
        if($i%2 ==0){
            $sum+=$i;
            // $cnt+=1; // $cnt = $cnt +1;
            $cnt++;
        }
    }
    echo "1~20 sum : ".$sum;echo"<br>";
    echo "1~20 sum 갯수 : ".$cnt;