<?php
$arr = array("orange"=>2000, "banana"=>3000,"apple" => 1500);
print_r($arr);
echo "<br><br>";

ksort($arr); //key
print_r($arr);
echo "<br><br>";

asort($arr); //value 값
print_r($arr);

?>