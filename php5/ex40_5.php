<?php
        $float = 192;

        $floatCheck = filter_var($float, FILTER_VALIDATE_FLOAT);
        if($floatCheck){
            echo "{$float}는 실수 입니다.";
        }else{
            echo "{$float}는 실수가 아닙니다.";            
        }

        echo "<br>";