<?php
    function checkInt($int){
        $intCheck = filter_var($int, FILTER_VALIDATE_INT);
        if($intCheck){
            echo "{$int}는 정수입니다.";
        }else{
            echo "{$int}는 정수아닙니다.";            
        }

        echo "<br>";
    }


    checkInt(894);
    checkInt(1.25);
    checkInt('hello php');
