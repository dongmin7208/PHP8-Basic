<?php
function IsUpper($a){
   if($a>='A' && $a <= 'Z')
        return true;
        else
            return false;
}
$ch = $_POST['in'];
if(IsUpper($ch))
    echo "대문자입니다";
else 
    echo "대문자가 아닙니다.";