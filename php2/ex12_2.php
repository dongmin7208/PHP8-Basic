<?php
function hap($a){
   $sum=0;
   for($i=1; $i<=$a ; $i++){
       $sum += $i;       
   }
   return $sum;
}

$num = (int)($_POST['in']);
echo hap($num);
?>