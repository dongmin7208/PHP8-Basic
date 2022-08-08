<?php
 class pen{
    public $color='blue';

    function __construct($color){
        echo"파라미터 color의 값: {$color}";
        echo"<br>";
        echo"프라퍼티 color의 값: {$this->color}";
        echo"<br>";
        $this->color = $color;
    }}

    function write($contents){
        echo"{$contents}을 쓰다";
    }
    function __destruct(){
        echo"pen 객체 사용이 끝났씁니다.";
    }
    $pen = new pen('pink');
    $pen -> write('글');


