<?php
$year = 2019;
$month = 4;
$day = 4;

$targetDateTimeStamp = mktime(0,0,0,$month,$day,$year);

$dayOfWeek = date('w',$targetDateTimeStamp);
$secondOfOneDay = 60*60*24;

switch($dayOfWeek){
    case 1:
        $month = $targetDateTimeStamp;
        $friday = $targetDateTimeStamp + ($secondOfOneDay*4); break;
    case 2:
        $monday = $targetDateTimeStamp - ($secondOfOneDay*1); 
        $friday = $targetDateTimeStamp + ($secondOfOneDay*3); break;
    case 3:
        $monday = $targetDateTimeStamp - ($secondOfOneDay*2);
        $friday = $targetDateTimeStamp + ($secondOfOneDay*2); break;
    case 4:
        $monday = $targetDateTimeStamp - ($secondOfOneDay*3);
        $friday = $targetDateTimeStamp + ($secondOfOneDay*1); break;
    case 5:
        $monday = $targetDateTimeStamp - ($secondOfOneDay*4);
        $friday = $targetDateTimeStamp;
}//switch
if(isset($monday) && isset($friday)){
    echo "{$year}年 {$month}月 {$day}日 있는 주의 월요일과 금요일 날짜.";
    echo "<br>";
    echo "月曜日 : ".date('Y-m-d',$monday);
    echo "<br>";
    echo "金曜日 : ".date('Y-m-d',$friday);
}else{
    "月曜日から金曜日まで　日を入力してください。";
}

?>