<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems_advanced/bfs_dfs_problems_advanced__search
list($n, $m, $x, $y, $z) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$c = array_map('intval', explode(' ', trim(fgets(STDIN))));

$map = [];
for($i = 0; $i < $m; $i++) {
    [$a,$b] = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $map[$a][] = $b;
    $map[$b][] = $a;
}


$que = [];
$visited = array_fill(1,$n,false);
array_push($que,[$x,0]);
$visited[$x] = true;
$res = [];
while(!empty($que)){
    [$now,$cnt] = array_shift($que);
    if( $cnt > $y) {
        break;
    }
    if($c[$now -1] == $z){
        array_push($res,$now);
    }

    foreach($map[$now] as $next){
        if($visited[$next] == false){
            $visited[$next] = true;
            array_push($que,[$next,$cnt+5]);
        }
    }
}
echo count($res).PHP_EOL;
sort($res);
foreach($res as $r){
    echo $r.PHP_EOL;
}
