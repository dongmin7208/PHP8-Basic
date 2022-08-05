<?php
$folderName='../php5/';

rmdir('hello');
if(is_dir('hello')){
    echo "hello folder存在します";
}else{
    echo 'hello folderが存在しません';
}