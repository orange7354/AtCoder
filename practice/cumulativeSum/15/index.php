<?php
// url : https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__string_count_step3/edit?language_uid=php
// 区間内の個数 (文字列) 3
fscanf(STDIN,'%d %d',$X,$Y);
$strs = str_split(trim(fgets(STDIN)));
$memo = [0];
foreach($strs as $idx => $str){
    $counter = 0;
    if( $str == 'b'){
        $counter = 1;
    }
    $memo[] = $memo[$idx] + $counter;
}

echo $memo[$Y] - $memo[$X - 1] . PHP_EOL;
