<?php
    $sum3=0;
    $cnt7=0;

    for($i=1; $i<=50; $i++){
        if($i%3 ==0){
            $sum3+=$i;
        }
        if($i%7 ==0){
            $sum7+=$i;
        }
    }
    
        echo $sum7;echo"<br>";
        echo $sum3;echo"<br>";

    if($sum3>$sum7){
        echo "3의 배수의 합계가 더 큽니다: ".$sum3;echo"<br>";
    }else if ($sum3<$sum7){
        echo "7의 배수의 합계가 더 큽니다.".$sum7;echo"<br>";
    }
?>