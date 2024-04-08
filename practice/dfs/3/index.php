<?php
//url :  https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__tree_dfs
fscanf(STDIN,'%d %d',$N,$X);
$grid = array_fill(1,$N,[]);
$visited = array_fill(1,$N,false);
for($i = 0; $i < $N - 1; $i++){
    [$a,$b] = array_map('intval',explode(' ',trim(fgets(STDIN))));
    $grid[$a][] = $b;
    $grid[$b][] = $a;
}
$history = [];
dfs($history,$visited,$X,$grid);
function dfs(&$history,&$visited,$x,$grid){
    $visited[$x] = true;
    $history[] = $x;
    sort($grid[$x]);
    foreach($grid[$x] as $val){
        if($visited[$val] == false) {
            dfs($history,$visited,$val,$grid);
        }
    }

    return;
}
foreach($history as $val){
    echo $val.PHP_EOL;
}