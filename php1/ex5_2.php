<?php
    $a = 'A';
    $b = 'B';

    $c = !2 || 3 && !0;
    var_dump($c);
    echo "<br>";

    $c = $a <$b && $a == $b;
    var_dump($c);
    echo "<br>";


    $c= $a< $b || $a == $b;
    var_dump($c);
    echo "<br>";

    ?>