<?php
// url :https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__route_between_two_vertex
fscanf(STDIN, "%d %d %d", $N,$X,$Y);

$edges = array_fill(1, $N, []);
$visited = array_fill(1, $N, false);
$distance = array_fill(1, $N, []);

for ($i = 1; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $edges[$a][] = $b;
    $edges[$b][] = $a;
}

$que = [$X];
$visited[$X] = true;
$distance[$X] = [$X];
while(!empty($que)){
    $node = array_shift($que);
    foreach($edges[$node] as $now){
        if($visited[$now] == false){
            if($now == $Y){
                $distance[$now] = [...$distance[$node],$now];
                break 2;
            }
            $distance[$now] = [...$distance[$node],$now];
            $visited[$now] = true;
            array_push($que,$now);
        }
    }
}

foreach($distance[$Y] as $d){
    echo $d.PHP_EOL;
}