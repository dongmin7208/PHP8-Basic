<?php
 $file = fopen("ex22_1.txt","r");

 while(! feof($file)){
    echo fgets($file)."<br>";
 }
 fclose($file);
 
