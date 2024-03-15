<?php
fscanf(STDIN,'%d',$N);
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
$arr2 = $arr;
/**
 * [1 2 3 4 5 6]
 * 
 */

rsort($arr);
$max = $arr[0];
$memo = [
    $arr[0] => 0,
];
$sum = 0;
foreach($arr as $idx => $val){
    $temp = $sum + $val;
    if( isset($memo[$val])) {
        $sum += $val;
        continue;
    };
    $memo[$val] = $sum;
    $sum = $temp;
}

foreach($arr2 as $idx => $val){
    if($idx == 0){
        echo $memo[$val];
    } else {
        echo ' '.$memo[$val];
    }
}

echo PHP_EOL;


