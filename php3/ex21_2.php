<?php
    $timestamp = time();
    echo "現在時間のタイムスータンポ : ".$timestamp."<br>";
    echo "現在時間 : ".date("Y-m-d H:i:s", $timestamp);
    echo "<br>";
    echo mktime(0,0,0,1,1,2000)."<br>";
    echo time();
?>