<?php
    function checkEmail($email){
        $emailCheck = filter_var($email,FILTER_VALIDATE_EMAIL);
        $returnInfo = false;

        if($emailCheck){
            $returnInfo = true;
            
        }

        return $returnInfo;

    }


    $email = "sayg1o1d@@gmail.com";

    if(checkEmail($email)){
        echo "{$email}는 올바른 이메일 주소입니다";
    }else{
        echo "{$email}는 올바르지 않는 이메일 주소입니다";
        
    }