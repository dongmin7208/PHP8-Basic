<h2>입장료 계산하기</h2>

<?php
    $child = 5000;
    $num = 3;
    $adult = 8000;
    $num2 = 2;
    $total = $child*$num + $adult*2;

    echo "소인 입장료".$child."won <br>";
    echo "소인 인원".$num."명 <br>";
    echo "대인 입장료".$adult."won <br>";
    echo "대인 인원".$num2."<br>";
    echo "- 전체입장료.$total";