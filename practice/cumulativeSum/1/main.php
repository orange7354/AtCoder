<?php
//url : https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__section_sum_step1/edit?language_uid=php
// 区間の和 1
$arr = [1,5,9,7,5,3,2,5,8];
// a2 ~ a7までの和 = 　S7 - S2
$memo = [];
//S0を追加
array_push($memo,0);
foreach($arr as $idx => $a){
    $memo[] = $a + $memo[$idx];
}
echo $memo[8] - $memo[2].PHP_EOL;