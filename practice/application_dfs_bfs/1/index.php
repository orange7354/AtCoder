<?php
// url :
fscanf(STDIN,'%d %d,%d',$N,$X,$Y);
$map = array_fill(1,$N,[]);
for($i = 0; $i < $N - 1; $i++){
    [$a,$b] = array_map('intval',explode(' ',trim(fgets(STDIN))));
    $map[$a][] = $b;
    $map[$b][] = $a;
}
$history = [];
$visited = array_fill(1,$N,false);
dfs($history,$visited,$X,$map);
var_dump($history);

function dfs(&$history,&$visited,$x,$map){
    $visited[$x] = true;
    $history[] = $x;
    foreach($map[$x] as $val){
        if($visited[$val] == false) {
            dfs($history,$visited,$val,$map);
        }   
    }
    return;
}