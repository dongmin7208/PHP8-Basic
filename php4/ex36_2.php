<?php
    echo "------------------------<br>";
    echo "달러      원화        유로<br>";
    echo "------------------------<br>";

    for($won=10; $won <=20; $won += 2){
        $dollar = $won * 1180.60;
        $euro = $won * 1350.30;

        echo $won." &nbsp; ".$dollar." &nbsp; ".$euro. "<br>";
    }