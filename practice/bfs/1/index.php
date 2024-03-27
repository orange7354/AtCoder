<?php
//url :https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__move_once
[$h, $w] = explode(" ", trim(fgets(STDIN)));
[$sy, $sx] = explode(" ", trim(fgets(STDIN)));

$step = [ [-1, 0], [1, 0], [0, -1], [0, 1] ];
$map = array_fill(0,$h,array_fill(0,$w,'.'));
$map[$sy][$sx] = '*';
foreach($step as $arr){
    $y = $sy + $arr[0];
    $x = $sx + $arr[1];
    if($y >= 0 && $y < $h && $x >= 0 && $x < $w){
        $map[$y][$x] = '*';
    }
}

foreach($map as $m){
    echo implode('',$m).PHP_EOL;
}