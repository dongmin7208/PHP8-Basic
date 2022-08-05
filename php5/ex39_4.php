<?php
    // $pattern = '/^i+$/';
    $pattern = '/^[a-zA-Z]{1}[a-zA-Z0-9.\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]{1}\.(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$/';


    // i로 시작하고 i로 끝나야하기때문에 $ 표시
    $str = 'sayg1o1d@gmail.com';


    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    
    }else {
        echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망.";
    }
