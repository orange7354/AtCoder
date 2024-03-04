<?php
// url : https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__section_count_step1?language_uid=php
// 区間内の個数 1
$arr = [1, 5, 9, 7, 5, 3, 2, 5, 8, 4];
/**
 * s0 = 0
 * s1 = a0
 * s2 = a0 + a1
 * s3 = a0 + a1 + a2
 * s4 = a0 + a1 + a2 + a3
 */
$evens = [0];
foreach($arr as $idx => $val){
    $even = 1;
    if($val % 2 !== 0){
        $even = 0;
    }
    $evens[] = $evens[$idx] + $even;
}
echo $evens[8] - $evens[2] . PHP_EOL;
