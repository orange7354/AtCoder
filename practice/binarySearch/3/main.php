<?php
//url :https://paiza.jp/works/mondai/binary_search/binary_search__basic_step2/edit?language_uid=php
// upper_bound
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