<?php

    for($i=5; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
            if($i == $j){
                echo $j;
            }else{
                echo "&nbsp;&nbsp;&nbsp;";
            }
        }
        echo"<br>";
    }
?>