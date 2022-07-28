<?php
    $menu='P';

    switch($menu){
        case 'P':
        case 'p':
            echo 'Pizza'; break;
        case 'S':
        case 's':
            echo 'Spaghetti'; break;
        case 'R':
        case 'r':
            echo 'Risotto'; break;
        case 'D':
        case 'd':
            echo 'Drink'; break;
        default:
            echo '잘못 누르셨습니다.'; 
    }
    ?>