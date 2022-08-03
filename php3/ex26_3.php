<?php
class Member{
    private $name;
    public function getName(){
        return $this->name;
    }
}

$mem = new Member();
$mem->name = "dondon";
echo "name  : ".$mem->getName();