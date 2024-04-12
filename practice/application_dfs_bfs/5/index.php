<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems_advanced/bfs_dfs_problems_advanced__which_is_near
list($n,$m,$x,$y) = array_map('intval',explode(' ',trim(fgets(STDIN))));
$map = [];
for($i = 0; $i < $m; $i++){
    list($a,$b) = array_map('intval',explode(' ',trim(fgets(STDIN))));
    $map[$a][] = $b;
    $map[$b][] = $a;
}

$xDist = bfs($map,$x,$n);
$yDist = bfs($map,$y,$n);


for($i = 1; $i <= $n; $i++){
    if($xDist[$i] == $yDist[$i]){
        echo 'Same'.PHP_EOL;
    } else if($xDist[$i] < $yDist[$i]){
        echo 'X is closer'.PHP_EOL;
    } else {
        echo 'Y is closer'.PHP_EOL;
    }
}



function bfs($map,$start,$n){
    $dist = array_fill(1,$n,-1);
    $que = [];
    array_push($que,$start);
    $dist[$start] = 0;
    while(!empty($que)){
        $now = array_shift($que);
        foreach($map[$now] as $next){
            if($dist[$next] == -1){
                $dist[$next] = $dist[$now] + 1;
                array_push($que,$next);
            }
        }
    }

    return $dist;
}