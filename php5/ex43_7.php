<?php
session_start();
$_SESSION['userId'] = 'clover1';

if(isset($_SESSION['userId'])){
    echo "userId 세션이 존재합니다.";
    unset($_SESSION['userId']);
    echo "session 삭제";
}else{
    echo "userId session이 존재하지 않습니다.";
}