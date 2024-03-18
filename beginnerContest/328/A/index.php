<?php

fscanf(STDIN, "%d %d", $N , $X);
$sArr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$ans = 0;
foreach($sArr as $s){
    if($s <= $X){
        $ans += $s;
    }
}

echo $ans.PHP_EOL;