<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems_advanced/bfs_dfs_problems_advanced__fill
list($n,$m,$x,$y) = array_map('intval',explode(' ',trim(fgets(STDIN))));
$map = [];
for($i = 0 ; $i < $n; $i++){
    $map[] = str_split(trim(fgets(STDIN)));
}

bfs($map,$x-1,$y-1);

function bfs(&$map,$x,$y){
    $step = [ [1,0] , [0,1] , [-1,0] , [0,-1] ];
    $que = [];
    array_push($que,[$x,$y]);
    $map[$x][$y] = '+';
    while(!empty($que)){
        [$nowX,$nowY] = array_shift($que);
        foreach($step as $s){
            $nextX = $nowX + $s[0];
            $nextY = $nowY + $s[1];
            if($nextX < 0 || $nextX >= count($map) || $nextY < 0 || $nextY >= count($map[0])){
                continue;
            }

            if($map[$nextX][$nextY] == '.'){
                $map[$nextX][$nextY] = '+';
                array_push($que,[$nextX,$nextY]);
            }
        }
    }
}

foreach($map as $m){
    echo implode('',$m).PHP_EOL;
}