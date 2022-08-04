<?php
    $str = "I love you!";
    //cutStr = substr($str, 0, 5);

    for($i=1; $i<=strlen($str); $i++){
        $cutStr = substr($str,0,$i);
        echo $cutStr."<br>";
    }