<?php
    function checkUrl($url){
        $urlCheck = filter_var($url,FILTER_VALIDATE_URL);
        $returnInfo = false;

        if($urlCheck){
            $returnInfo = true;
            
        }

        return $returnInfo;

    }


    $url = "https://github.com/dongmin7208";

    if(checkurl($url)){
        echo "{$url}는 올바른 이메일 주소입니다";
    }else{
        echo "{$url}는 올바르지 않는 이메일 주소입니다";
        
    }

    echo "<br>";

    $url = "www.abc.com";

    if(checkurl($url)){
        echo "{$url}는 올바른 이메일 주소입니다";
    }else{
        echo "{$url}는 올바르지 않는 이메일 주소입니다";
        
    }