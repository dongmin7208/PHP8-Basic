
<?php
$file1 = fopen("ex22_4.txt","r");
$file2 = fopen("ex22_4_1.txt","w");

$str = "";
$number =1;
while(! feof($file1)){
    $str .= $number." : ".fgets($file1);
    $number++; 
}
fwrite($file2, $str);

echo " 完了！!@!";
fclose($file1);
fclose($file2);
?>