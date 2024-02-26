<?php

fscanf(STDIN, '%d', $n);
$arr = explode(' ', trim(fgets(STDIN)));
fscanf(STDIN, '%d', $q);
for($i = 0; $i < $q; $i++) {
    fscanf(STDIN, '%d', $t);
    echo binarySearch($t,$arr,$n) ? 'Yes' : 'NO'.PHP_EOL;
}

function binarySearch($t,$arr,$n){
    $left = 0;
    $right = $n -1;

    while($left <= $right){
        $mid = intdiv($left + $right , 2);
        if($arr[$mid] == $t)
            return true;
        if($t > $arr[$mid]){
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return false;
}
