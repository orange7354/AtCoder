<?php

fscanf(STDIN, "%d %d %d", $l, $n , $k);

$arr = explode(" ", trim(fgets(STDIN)));



function canDivide($cuts, $n, $maxLen, $L) {
    $count = 1;
    $prevCut = 0;
    foreach ($cuts as $cut) {
        if ($cut - $prevCut > $maxLen) {
            return false;
        } else {
            $prevCut = $cut;
            $count++;
        }
    }
    return $count == $n;
}

function findMinimumMaxLength($L, $n, $k, $A) {
    array_unshift($A, 0);
    array_push($A, $L);
    $left = 0;
    $right = $L + 1;
    
    while ($right - $left > 1) {
        $mid = intdiv($left + $right, 2);
        if (canDivide($A, $n, $mid, $L)) {
            $right = $mid;
        } else {
            $left = $mid;
        }
    }
    
    return $right;
}


echo findMinimumMaxLength($l,$n,$k,$arr).PHP_EOL;