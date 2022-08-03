<?php
class Person{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function __destruct(){
       echo "name  : ".$this->name."です、";
    }
}
    $person1 = new Person("DonDon");    
