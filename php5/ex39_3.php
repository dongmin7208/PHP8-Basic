<?php
    // $pattern = '/^i+$/';
    $pattern = '/^[0-9]+$/';
    // i로 시작하고 i로 끝나야하기때문에 $ 표시
    $str = 1234567;


    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    
    }else {
        echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망.";
    }
