<?php
$randNum = rand(1,3);
$kawibawibo = '';

switch($randNum){
    case 1:
        $kawibawibo = 'ちょき'; break;
    case 2:
        $kawibawibo = 'ぐう'; break;
    case 3:
        $kawibawibo = 'ぱあ'; break;
    default :
        $kawibawibo = ''; break;

}

echo "choice : {$kawibawibo}";