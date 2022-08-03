<?php
class Person{
    public $name;
    public $age;
    public function intro(){
        echo "name :  ".$this->name.", age : ".$this->age;
    }
}

$dong = new Person();
$dong->name ="dondon";
$dong->age = 20;
$dong->intro();
