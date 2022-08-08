<?php
 class pen{
    public $color;
    public $bold;
    public $price;

    function __construct($color, $bold, $price){
        echo"use pen";
        echo"<br>";
        echo"color: .{$color}";
        echo"<br>";
        echo"두께: .{$bold}";
        echo"<br>";
        echo"가격: .{$price}";
        echo"<br>";
    }}

    function write($contents){
        echo"{$contents}을 쓰다";
    }
    function __destruct(){
        echo"pen 객체 사용이 끝났씁니다.";
    }
    $pen = new pen('pink','두꺼운','1000');
    echo "<br>Hello World<br>";
    $pen->write('글');