<?php
$num = (float)($_POST['num']);
$round = round($num, 1);
echo '반올림 : '.$round."<br>";

$floor = floor($num);
echo '내림 : '.$floor."<br>";

$ceil = ceil($num);
echo '올림 : '.$ceil."<br>";

?>

