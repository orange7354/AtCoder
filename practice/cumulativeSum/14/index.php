<?php
// url : https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__string_count_step2?language_uid=php
// 区間内の個数 (文字列) 2
$strs = str_split(trim(fgets(STDIN)));
$memo = [0];
foreach($strs as $idx => $str){
    $counter = 0;
    if( $str == 'b'){
        $counter = 1;
    }
    $memo[] = $memo[$idx] + $counter;
}

echo $memo[8] - $memo[2] . PHP_EOL;
