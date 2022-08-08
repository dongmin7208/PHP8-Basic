<?php
$fileName="helloworld.txt";
if(file_exists($fileName)){
   $fopen=fopen($fileName,'r');
   if($fopen){
      $fread = fread($fopen,filesize($fileName));
      if($fread){
         echo $fread;
         fclose($fopen);
      }else{
         echo"파일 읽기 실패";
      }
   }else{
      echo"파일 열기 실패";
   }
}else{
   echo"파일 존재하지않습니다.";
}