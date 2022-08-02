<?php
    function sum($a,$b){
        return ($a+$b);
    }
    function minus($a, $b){
        return ($a - $b);
    }

    function multiply($a, $b){
        return ($a*$b);
    }
    function divide($a, $b){
        return ($a/$b);
    }

    $x=20; $y=10;

    $res=sum($x,$y);

    echo "result(sum) : ".$res;
    echo "<br>";
    $res=minus($x,$y);

    echo "result(minus) : ".$res;
    echo "<br>";
    
    $res=multiply($x,$y);

    echo "result(multiply) : ".$res;
    echo "<br>";
    
    $res=divide($x,$y);

    echo "result(divide) : ".$res;
    echo "<br>";
    