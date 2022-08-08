<?php
session_start();
$_SESSION['userId'] = 'clover1';

if(isset($_SESSION['userId'])){
    echo "session 생성완료 세션 userId의 값 : {$_SESSION['userId']}";
}else{
    echo "session 생성 실패";
}
?>

