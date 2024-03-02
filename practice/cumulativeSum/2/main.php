<?php
//url : https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__section_sum_step2/edit?language_uid=php&t=6625ef2d3c8d2d8a47e5db8c087b39bb
// 区間の和 2
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
// a2 ~ a7までの和 a[2,8) = S[2,8)
$memo = [];
//S0を追加
array_push($memo,0);
foreach($arr as $idx => $a){
    $memo[] = $a + $memo[$idx];
}
echo $memo[8] - $memo[2].PHP_EOL;