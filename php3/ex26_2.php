<?php
class Member{
    public $name;
    public function getName(){
        return $this->name;
    }
}

$mem = new Member();
$mem->name = "dondon";
echo "name  : ".$mem->getName();