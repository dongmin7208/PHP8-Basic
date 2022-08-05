<?php
    function IsPrime($no){
        for($i=2; $i<$no; $i++){
            if($no%$i == 0){
                //달러 i 나누는거!!
                return false;
            }
        }
        return true;
    }

$num = (int)($_POST['dat']);
if(IsPrime($num)){
    echo $num."は　소수입니다.";
}else{
    echo $num."는 소수아닙니다.";
}
