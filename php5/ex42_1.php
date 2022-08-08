<?php
$fopen = fopen('helloworld.txt','r+');

if($fopen){
    echo " file open";
}else{
    echo"file open fail!";
}