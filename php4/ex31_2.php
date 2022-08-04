<?php
    $fruit = array();
    $fruit = ['banana','water melon', 'grape', 'apple', 'mango'];

    echo $fruit[0];
    echo "<br>";
    echo $fruit[2];
    echo "<br>";
    echo $fruit[4];

    for($i=0; $i<count($fruit); $i++){
        echo $fruit[$i]."<br>";
    }