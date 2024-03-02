<?php
//url : https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__section_sum_step3?language_uid=php
// 区間の和 3
fscanf(STDIN,'%d %d',$x,$y);
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
// ax ~ ayまでの和 [ax,ay+1) [sx,sy+1]
$memo = [0];
foreach($arr as $i => $a){
    $memo[] = $memo[$i] + $a;
}
echo $memo[$y + 1] - $memo[$x] . PHP_EOL;
