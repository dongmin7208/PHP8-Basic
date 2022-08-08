<?php
if(isset($_COOKIE['memberID'])){
    echo "cookie memberID의 값은 ".$_COOKIE['memberID'];
}else{
    echo "cookie memberID가 존재하지 않습니다. ";
}