<?php
$email = array('test', 'naver.com');
$str = join('@',$email);
echo "email : ".$str;
echo "<br>";

$tel =array('010','5169','0877');
$str2= join('-', $tel);
echo 'tel : '.$str2;

?>
