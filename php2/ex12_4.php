<?php
function score($a){
    if($a>=90) return 'A';
    elseif($a>=80)
    return 'B';
    elseif($a>=70)
    return 'C';
    elseif($a>=60)
    return 'D';
    else
        return 'F';
}

$tensu = (int)($_POST['in']);
echo "score ".score($tensu)."です.";