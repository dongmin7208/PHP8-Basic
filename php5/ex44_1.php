<?php
 class pen{
    public $color;
    public $bold;
    public $price;

    public function write($contents){
        echo "{$contents}을 쓰다";
    }

    public function draw($contents){
        echo "{$contents}을 그리다";
    }
}


$pen = new pen('파란','두께','금액');
$pen -> write("book");