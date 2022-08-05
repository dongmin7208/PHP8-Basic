<h2>결제 금액 계산하기</h2>

<?php
    $bookPrice = 10000;
    $discount = 10;
    $delivery = 2500;

    $pay = $bookPrice - ($bookPrice*$discount/100) + $delivery ;

    echo "book price : ".$bookPrice."won<br>";
    echo "discount : ".$discount."%<br>";
    echo "delivery : ".$delivery."won<br>";