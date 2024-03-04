<?php
//url :https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__sum_max_boss?language_uid=php
// 連続する N 個の和の最大値 4
fscanf(STDIN,'%d %d',$N , $K);
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
/**
 * 連続する3個の和の最大値
 * s0 = 0
 * s1 = a1
 * s2 = a1 + a2
 * s3 = a1 + a2 + a3
 * s4 = a1 + a2 + a3 + a4
 * s5 = a1 + a2 + a3 + a4 + a5
 * s6 = a1 + a2 + a3 + a4 + a5 + a6
 * 
 * r0 = sn - s0
 * r1 = sn - s1
 * r2 = sn - s2
 */
$memo = [0];
foreach($arr as $idx => $a){
    $memo[] = $memo[$idx] + $a;
}
$sums = [];
foreach($memo as $idx => $val){
    if(count($memo) - $K <= $idx) break;
    $sums[] = $memo[$idx + $K] - $memo[$idx];
}

echo max($sums) . PHP_EOL;