<?php
    function isEven($a){
        if($a%2 ==0)
        return (true);
        else{
            return(false);
        }

        $x=10;
        if(isEven($x)){
            echo ($x."even.<br>");
        }else{
            echo ($x."odd . <br>");
        }
    }
    