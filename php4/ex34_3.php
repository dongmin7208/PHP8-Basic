<?php
$num1 = (int)($_POST['num1']);
$num2 = (float)($_POST['num2']);
$num3 = (int)($_POST['num3']);

echo "원금 : ".number_format($num1)."<br>";
echo "이자율 : ".$num2."<br>";
echo "개월수 : ".$num3."<br>";
$res = $num1*($num2*0.001/365)*$num3*30;
echo "총이자 : ".number_format($res)." 원";

