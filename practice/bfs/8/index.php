<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__three_length
fscanf(STDIN, "%d %d", $N,$X);
$edges = array_fill(1, $N, []);
$visited = array_fill(1, $N, false);
$distance = array_fill(1, $N, 0);

for($i = 0; $i < $N - 1; $i++){
    fscanf(STDIN, "%d %d", $a, $b);
    $edges[$a][] = $b;
    $edges[$b][] = $a;
}

$que = [$X];
$visited[$X] = true;
$distance[$X] = 0;

while(!empty($que)){
    $node = array_shift($que);
    foreach($edges[$node] as $now){
        if($visited[$now] == false){
            $distance[$now] = $distance[$node] + 1;
            $visited[$now] = true;
            array_push($que,$now);
        }
    }
}

foreach($distance as $key => $value){
    if($value == 3){
        echo $key.PHP_EOL;
    }
}




