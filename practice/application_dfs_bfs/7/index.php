<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems_advanced/bfs_dfs_problems_advanced__merge

list($n,$m) = array_map('intval',explode(' ',trim(fgets(STDIN))));
$map = [];
for($i = 0 ; $i < $n; $i++){
    $map[] = str_split(trim(fgets(STDIN)));
}
$colors = ['R', 'G', 'B'];
$query = [];
foreach ($colors as $color) {
    foreach ($colors as $item) {
        if ($item !== $color) {
            $query[$color][] = $item;
        }
    }
}
$counter = PHP_INT_MAX;

foreach($query as $from => $toArr){
    foreach($toArr as $to){
        $counter = min($counter,toTwoColor($map,$from,$to,$n,$m,$toArr));
    }
}
echo $counter.PHP_EOL;

function toTwoColor($map,$from,$to,$n,$m,$colors){
    $counter = 0;
    $newMap = array_map(function($item)use($from,$to){
        $newItem = [];
        foreach($item as $val){
            if($val == $from){
                $newItem[] = $to;
            } else {
                $newItem[] = $val;
            }
        }
        return $newItem;
    },$map);

    $a = $colors[0];
    $b = $colors[1];

    for($i = 0; $i < $n ; $i++){
        for($j = 0; $j < $m; $j++){
            if($newMap[$i][$j] == $a){
                bfs($newMap,$i,$j,$a);
                $counter++;
            } elseif ( $newMap[$i][$j] == $b ){
                bfs($newMap,$i,$j,$b);
                $counter++;
            }
        }
    }

    return $counter;
}

function bfs(&$map,$x,$y,$color){
    $step = [ [1,0] , [0,1] , [-1,0] , [0,-1] ];
    $que = [];
    array_push($que,[$x,$y]);
    $map[$x][$y] = '*';
    while(!empty($que)){
        [$nowX,$nowY] = array_shift($que);
        foreach($step as $s){
            $nextX = $nowX + $s[0];
            $nextY = $nowY + $s[1];
            if($nextX < 0 || $nextX >= count($map) || $nextY < 0 || $nextY >= count($map[0])){
                continue;
            }

            if($map[$nextX][$nextY] == $color){
                $map[$nextX][$nextY] = '*';
                array_push($que,[$nextX,$nextY]);
            }
        }
    }
}