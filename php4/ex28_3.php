<?php
    function check($a, $b){
        if(strcmp($a, $b) == 0){
            echo "SAME";
        }else{
            echo "DIFFERENT";
        }
    }
    $str1 = $_POST['dat1'];
    $str2 = $_POST['dat2'];
    check($str1, $str2);