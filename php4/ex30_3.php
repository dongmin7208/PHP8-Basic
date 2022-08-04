<?php
    $var='';
    echo "값이 빈 문자열인 경우";
    var_dump(empty($var));
    echo "<br>";

    $var=null;
    echo "값이 널 인 경우";
    var_dump(empty($var));
    echo "<br>";

    $var=array();
    echo "값이 빈 배열열인 경우";
    var_dump(empty($var));
    echo "<br>";


    $var=0;
    echo "정수값이 0인경우";
    var_dump(empty($var));
    echo "<br>";


    $var='0';
    echo "값이 문자열 0인경우";
    var_dump(empty($var));
    echo "<br>";


    $var='string';
    echo "값이 문자열인 경우";
    var_dump(empty($var));
    echo "<br>";


