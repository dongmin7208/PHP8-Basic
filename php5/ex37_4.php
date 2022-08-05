<?php
    function factorial($no){
        $fact=1;
        for($i=1; $i<=$no; $i++){
            $fact = $fact*$i;
        }
        return $fact;
    }

    $num = 4;
    echo "5!은 ".factorial($num)."입니다.";
