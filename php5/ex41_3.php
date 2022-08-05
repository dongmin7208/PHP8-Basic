<?php
$folderName='hello';
$folderName='world';
$opendir= opendir($folderName);

if($opendir){
    echo "{$folderName} folder open";
}else{
    echo "{$folderName} folder 失敗";
}