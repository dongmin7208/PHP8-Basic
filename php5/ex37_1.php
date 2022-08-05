<?php
    function IsLower($char){
        if($char >= 'a' && $char <= 'z'){
            echo $char. "は 소문자입니다.";
        }else {
            echo $char."は　소문자가아닙니다.";
        }
    }

    $ch = $_POST['dat'];
    IsLower($ch);