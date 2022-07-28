<?php
    $A=10; $B=5; $op='-';

    switch($op){
        case '+':
            echo '+  => '.($A+$B); break;
        case '-':
            echo '-  => '.($A-$B); break;
        case '*':
            echo '*  => '.($A*$B); break;
        case '/':
            echo '/  => '.($A/$B); break;
        default:
            echo '잘못 누르셨습니다.'; 
    }
    ?>