<?php
fscanf(STDIN, "%d",$n);
//普通にやったらtlになる
//メモ化再帰でやる

$que = [$n];
$count = 0;

while(!empty($que)) {
    $num = array_shift($que);
    $count += $num;
    $a = intdiv($num, 2);
    $b = ceil($num/2);

    if($a >= 2){
        array_push($que, $a);
    }

    if($b >= 2){
        array_push($que, $b);
    }
}

echo $count.PHP_EOL;



