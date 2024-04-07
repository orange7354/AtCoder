<?php
// url :https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__bfs_visit_graph

fscanf(STDIN, "%d %d %d", $N,$M,$X);
$edge = array_fill(1,$N,[]);
$visited = array_fill(1,$N,false);
for($i=0;$i<$M;$i++){
    fscanf(STDIN, "%d %d", $a,$b);
    $edge[$a][] = $b;
    $edge[$b][] = $a;
}

$que = [$X];
$visited[$X] = true;
$history[] = $X;
while(!empty($que)){
    $node = array_shift($que);
    sort($edge[$node]);
    foreach($edge[$node] as $now){
        if($visited[$now] == false){
            $visited[$now] = true;
            array_push($que,$now);
            array_push($history,$now);
        }
    }
}

foreach($history as $h){
    echo $h.PHP_EOL;
}