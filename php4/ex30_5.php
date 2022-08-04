<?php
    $x = 5;

    function myTest(){
        $x=10;//local scope
    }

    myTest();

    echo $x;