<?php
// url : https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__section_count_step2/edit?language_uid=php
// 区間内の個数 2
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$memo = [0];
foreach($arr as $idx => $a){
    $counter = 1;
    if($a % 2 !== 0 ){
        $counter = 0;
    }
    $memo[] = $memo[$idx] + $counter;
}
echo $memo[8] - $memo[2] . PHP_EOL;