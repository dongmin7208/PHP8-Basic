<?php
if(isset($_COOKIE['check'])){
    echo "쿠키 check 의 값은 ".$_COOKIE['check'];
}else{
    echo "쿠키 check 값이 존재하지 않습니다.";
}
?>

