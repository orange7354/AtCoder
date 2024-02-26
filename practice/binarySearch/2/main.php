<?php

fscanf(STDIN, '%d', $n);
$arr = explode(' ', trim(fgets(STDIN)));
sort($arr);
fscanf(STDIN, '%d', $q);
for($i = 0; $i < $q; $i++) {
    fscanf(STDIN, '%d', $t);
    echo $n - binarySearch($t,$arr,$n) . PHP_EOL;
}

function binarySearch($t,$arr,$n){
    // 合格者がいない場合や、全員合格者の場合があるため
    //　境界値は外側
    $left = -1;
    $right = $n;

    while($right - $left > 1){
        $mid = intdiv($right + $left , 2);

        if($arr[$mid] >= $t ){
            $right = $mid;
        } else {
            $left = $mid;
        }
    }

    return $right;
}
