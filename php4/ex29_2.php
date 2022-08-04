<?php
    $str=$_POST['dat'];

    for($i=0; $i< strlen($str); $i++){
        echo substr($str, 0, $i+1)."<br>";
    }