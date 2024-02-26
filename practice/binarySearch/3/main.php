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
    $ng = -1;
    $ok = $n;


    while($ok - $ng > 1){
        $mid = intdiv($ok + $ng,2);
        if($arr[$mid] > $t){
            $ok = $mid;
        } else {
            $ng = $mid;
        }
    }

    return $ok;
}