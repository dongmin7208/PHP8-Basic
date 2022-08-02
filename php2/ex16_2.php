<?php
$str="&lt;h3&gt; PHP PROGAMMINGは　サーバーのプラグラミングです。&lt;h3&gt;";
echo $str;

$str2 = htmlspecialchars_decode($str);
echo $str2;
