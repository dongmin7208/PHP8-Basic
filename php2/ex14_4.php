<?php
$Arr = array(
    array(0,0,0,0,0),
    array(0,0,0,0,0),
    array(0,0,0,0,0),
    array(0,0,0,0,0),
    array(0,0,0,0,0)
);

$sum=0;
$val=1;

for($i=0; $i<5; $i++){  //배열을 초기화
    for($j=0; $j<5; $j++){
       $Arr[$i][$j]=$val;
       $val++;     
    }
}

for($i=0; $i<5; $i++){
    for($j=0; $j<5; $j++){
        printf("%3d",$Arr[$i][$j]); //4칸씩 잡아서 출력한다.
    }
    echo "<br>";
}

for($i=1; $i<=5; $i++){
    for($j=0; $j<$i; $j++){
        $sum += $Arr[$i][$j]; //조건 i+j>=5을 만족하는 요소의 합을 구한다.
    }
}

for($i=0; $i<5; $i++){
    for($j=0; $j<5; $j++){
        if($i+$j==4) //조선 i+j ==4 을 만족하는 요소의 합을 구한다.
        $sum+= $Arr[$i][$j];
    }
}

printf("음영이 있는 부분의 합은 %d 입니다. ", $sum-13);

?>