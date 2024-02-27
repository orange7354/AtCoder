<?php
fscanf(STDIN, '%d', $n);
$arr = explode(' ', trim(fgets(STDIN)));
sort($arr);
fscanf(STDIN, '%d', $q);
for($i = 0; $i < $q; $i++) {
    fscanf(STDIN, '%d %d', $l,$r);
    echo binarySearch($r,$arr,$n) - binarySearch($l-1,$arr,$n).PHP_EOL;
}

function binarySearch($t,$arr,$n){
    $left = -1;
    $right = $n;

    while($right - $left > 1){
        $mid = intdiv($right + $left , 2);

        if($arr[$mid] > $t){
            $right = $mid;
        } else {
            $left = $mid;
        }
    }

    return $left;
}
