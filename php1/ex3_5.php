<?php
    class Hello{
        public $name="park";
        function say(){
            return $this->name."hello";
        }
    }
    $msg= new Hello();
    echo $msg->say();
    echo "<br>";
    var_dump($msg);
    ?>