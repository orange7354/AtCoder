<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems_advanced/bfs_dfs_problems_advanced__highway
[$n,$m] = array_map('intval',explode(' ',trim(fgets(STDIN))));
$t = array_map('intval',explode(' ',trim(fgets(STDIN))));
$times = array_fill(1,$n,0);
$map = array_fill(1,$n,[]);
for($i = 0; $i < $m; $i++){
    [$a,$b] = array_map('intval',explode(' ',trim(fgets(STDIN))));
    $map[$a][] = $b;
    $map[$b][] = $a;
}
$degree = [];
foreach($t as $key => $val){
    $degree[$key + 1] = $val;
}

$que = [1];
$visited = array_fill(1,$n,false);
$visited[1] = true;
while(!empty($que)){
    $node = array_shift($que);
    foreach($map[$node] as $next){
        if($visited[$next] === false){
            $que[] = $next;
            $visited[$next] = true;
            $times[$next] = $times[$node] + 5;
        }
    }
}
$counter = 0;
foreach($degree as $key => $val){
    if($val > $times[$key]){
        $counter++;
    } 
}
echo $counter . PHP_EOL;