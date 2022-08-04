<?php
    $ch1="A";
    $ch2="a";

    echo "-----     Uppercase ASCII check    ---------<br>";


    for($i=1;  $i<=26; $i++){
        if($i == 26)
        echo ord($ch1);
        else 
        echo ord($ch1),", ";
        $ch1++;
    }

    echo "<br>";
    echo "---------- Lowercase ASCII check -------------<br>";

    for($i=1; $i<=26; $i++){
        if($i == 26)
            echo ord($ch2);
            else
            echo ord($ch2).", ";
        $ch2++;
    }

    echo "<br>";

    $no=65;
    for($i=1; $i<=26; $i++){
        if($i == 26)
            echo chr($no);
        else 
            echo chr($no).", ";
        $no++ ;
        }