<?php
//url :https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__maze
[$h, $w] = explode(" ", trim(fgets(STDIN)));
[$sy, $sx] = explode(" ", trim(fgets(STDIN)));
[$gy , $gx] = explode(" ", trim(fgets(STDIN)));
for($i = 0; $i < $h; $i++){
    $map[] = str_split(trim(fgets(STDIN)));
}

$step = [ [-1, 0 ], [1, 0 ], [0, -1 ], [0, 1] ];
$que = [[$sy, $sx, 0]];

while(!empty($que)){
    [$y,$x,$count] = array_shift($que);
    $map[$y][$x] = '*';
    foreach($step as $arr){
        $nextY = $y + $arr[0];
        $nextX = $x + $arr[1];
        if($y == $gy && $x == $gx){
            echo $count.PHP_EOL;
            exit;
        }
        if($nextY >= 0 && $nextY < $h && $nextX >= 0 && $nextX < $w && $map[$nextY][$nextX] == '.'){
            $que[] = [$nextY, $nextX, $count + 1];
            $map[$nextY][$nextX] = '*';
        }
    }
}


echo 'No'.PHP_EOL;