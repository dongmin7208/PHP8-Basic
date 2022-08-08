<?php
session_start();
$_SESSION['mySession1'] = 'clover1';
$_SESSION['mySession2'] = 'clover2';
$_SESSION['mySession3'] = 'clover3';

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

if(session_destroy()){
    echo "all session delete";
}else{
    echo "all session delete fail!";
}