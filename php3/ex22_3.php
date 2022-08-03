
<?php
$file = fopen("ex22_3.txt","w");

$str = "おはよう~ ありがとう！1~";
fwrite($file, $str);

echo " 完了！!!";
fclose($file);
?>