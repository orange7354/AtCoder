<?php
fscanf(STDIN,'%d %d',$H,$W);
$map = [];
for($i = 0 ; $i < $H ; $i++){
    $map[] = str_split(trim(fgets(STDIN)));
}

$counter = 0;
foreach($map as $key => $w_arr){
    foreach($w_arr as $k => $v){
        if($map[$key][$k] == '.'){
            $counter += dfs($key,$k,$H,$W,$map);
        }
    }
}

function dfs($y,$x,$H,$W,&$map){
    $step = [
        [-1, 0], // 上
        [0, 1],  // 右
        [1, 0],  // 下
        [0, -1]  // 左
    ];
    $map[$y][$x] = '*';
    foreach($step as $arr){
        $ny = $y + $arr[0];
        $nx = $x + $arr[1];
        if($ny >= 0 && $ny < $H && $nx >= 0 && $nx < $W){
            if($map[$ny][$nx] == '.'){
                dfs($ny,$nx,$H,$W,$map);
            }
        }
    }
    return 1;
}

echo $counter.PHP_EOL;