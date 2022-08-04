<?php
    function myTest(){
        $x=5;//local scope
        echo $x;
    }

    myTest();

    echo $x;