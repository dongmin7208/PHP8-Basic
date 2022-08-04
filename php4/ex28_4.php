<?php
    $str = "Mr. Peter";
    if(substr($str, 0, 3) === "Mr."){
        echo "지정한 문자열로 시작됩니다.";
    }else {
        echo "지정한 문자열로 시작되지 않습니다.";
    }