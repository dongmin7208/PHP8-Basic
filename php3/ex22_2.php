<?php
 $file = fopen("ex22_2.csv","r");
$header = fgetcsv($file);
$num = count($header);

echo "<h2>5数の学生 ".$num."科目・平均구하기 </h2>";

$cnt=0;


 while(! feof($file)){
   $sum=0;
   $line = fgetcsv($file);
   foreach($line as $v) {
      $sum += $v;
   } 
   $avg = round($sum/3, 2);

   echo "sum: ".$sum.", avg : ".$avg."<br>";
   $cnt++;
   if($cnt==5) break;

}
 fclose($file);
 
