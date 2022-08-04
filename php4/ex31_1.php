<?php
    $data = array(array(3,34,-3,-47,9,10),
    array(32,3,-34,42,19,1),
    array(2,9,-1,-12,89,0));

    for($i=0; $i<count($data); $i++){
        $number = $i +1;
        echo $number." : " ;
        for($j=0; $j<count($data[$i]); $j++){
            echo $data[$i][$j]." " ;
        }
        echo "<br>";
    }