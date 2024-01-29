<?php
fscanf(STDIN,'%s',$N);
$arr = str_split($N);
$check = [
    "A" => 0,
    "B" => 1,
    "C" => 2,
];
$last = 0;
$res = true;
foreach($arr as $val){
    if($check[$val] >= $last){
    } else {
        $res = false;
        break;
    }
    $last = $check[$val];
}

echo $res ? "Yes".PHP_EOL : "No".PHP_EOL;