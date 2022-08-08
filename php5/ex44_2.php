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
    $pen = new pen('pink','두꺼운','1000');