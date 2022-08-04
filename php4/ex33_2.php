<?php
$nowTime = getdate();
echo "年　：　".$nowTime['year']."<br>";
echo "月　：　".$nowTime['mon']."<br>";
echo "日　：　".$nowTime['mday']."<br>";
echo "詩　：　".$nowTime['hours']."<br>";
echo "分　：　".$nowTime['minutes']."<br>";
echo "秒　：　".$nowTime['seconds']."<br>";
echo "曜日　数　　：　".$nowTime['wday']."<br>";
echo "曜日　文字　：　".$nowTime['weekday']."<br>";
echo "月　文字　：　".$nowTime['month']."<br>";
echo "時間　：　".$nowTime[0]."<br>";
echo "올해의일차　：　".$nowTime['yday']."<br>";