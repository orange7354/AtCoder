<?php
//url :https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__move_three_times
[$h, $w] = explode(" ", trim(fgets(STDIN)));
[$sy, $sx] = explode(" ", trim(fgets(STDIN)));

$map = array_fill(0,$h,array_fill(0,$w,'.'));
$step = [ [-1, 0 ], [1, 0 ], [0, -1 ], [0, 1] ];
$que = [[$sy, $sx, 0]];

while(!empty($que)){
    $point = array_shift($que);
    $y = $point[0];
    $x = $point[1];
    $count = $point[2];
    $map[$y][$x] = '*';
    foreach($step as $arr){
        $y = $point[0] + $arr[0];
        $x = $point[1] + $arr[1];
        $count = $point[2] + 1;
        if($y >= 0 && $y < $h && $x >= 0 && $x < $w){
            $map[$y][$x] = '*';
            if($count == 3){
                continue;
            }
            $que[] = [$y, $x, $count];
        }
    }
}

foreach($map as $m){
    echo implode('',$m).PHP_EOL;
}