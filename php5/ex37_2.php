<?php
    function IsCaps($ch){
        if($ch>='a' && $ch<='z'){
            echo $ch."は소문자입니다.";
        }
        elseif($ch>='A' && $ch<='Z'){
            echo $ch."は소문자가아입니다.";
        }else{
            echo $ch."は 알파벳이 아닙니다";
        }
    }


    $char=$_POST['dat'];
    IsCaps($char);