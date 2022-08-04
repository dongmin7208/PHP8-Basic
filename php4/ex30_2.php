<?php
    $val = "true";
    echo "変数のval데이터형".gettype($val);
    
    echo"<br>";
    settype($val,'bool');
    echo "変数のval데이터형".gettype($val);
    echo"<br>";
    var_dump($val);
