<?php
$folderName='../php5/';

if(is_dir($folderName)){
    echo "폴더가 존재합니다.";
    $opendir = opendir($folderName);
    if($opendir){
        echo "폴더를 열었습니다.<br>";
        while(($readdir = readdir($opendir))){
            echo $readdir.'<br>';
        }
        closedir($opendir);
    }else{
        echo "폴더를 열지 못했습니다.";
    }
}else{
    echo "폴더가 존재하지 않습니다.";
}

?>

