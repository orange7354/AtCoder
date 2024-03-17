<?php
fscanf(STDIN, "%d %d", $N , $M);
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

$res = array_fill(1, $N, 0);
$minIdx = $N;
$max = 0;
foreach($arr as $val){
    $temp = $res[$val] + 1;
    if($temp == $max){
        $minIdx = min($val, $minIdx);
        echo $minIdx.PHP_EOL;
    } else if($temp > $max){
        $minIdx = $val;
        echo $minIdx.PHP_EOL;
        $max = $temp;
    } else if ($temp < $max){
        echo $minIdx.PHP_EOL;
    }
    $res[$val] = $temp;
}