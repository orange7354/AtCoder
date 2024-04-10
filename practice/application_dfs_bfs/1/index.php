<?php
// url :
fscanf(STDIN,'%d %d %d',$N,$X,$Y);
$map = array_fill(1,$N,[]);
$degree = array_fill(1,$N,0);
for($i = 0; $i < $N - 1; $i++){
    [$a,$b] = array_map('intval',explode(' ',trim(fgets(STDIN))));
    $map[$a][] = $b;
    $map[$b][] = $a;

    $degree[$a]++;
    $degree[$b]++;
}

$que = [$X];
$visited = array_fill(1,$N,false);
$dist = array_fill(1,$N,0);

while(!empty($que)){
    $node = array_shift($que);
    foreach($map[$node] as $next){
        if($visited[$next] === false){
            $que[] = $next;
            $visited[$next] = true;
            $dist[$next] = $dist[$node] + 1;
        }
    }
}

if( $degree[$X] >= 2 ){
    echo 10 + 5 * $dist[$Y] . PHP_EOL;
} else {
    echo 5 * $dist[$Y] . PHP_EOL;
}