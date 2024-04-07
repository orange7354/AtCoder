<?php
[$N,$M,$X,$Y] = array_map('intval', explode(' ', trim(fgets(STDIN))));
$grid = array_fill(1,$N,[]);
$visited = array_fill(1,$N,false);
for($i = 0; $i < $M; $i++){
    fscanf(STDIN, "%d %d", $a,$b);
    $grid[$a][] = $b;
    $grid[$b][] = $a;
}
$que = [];
$visited[$X] = true;
array_push($que,[$X,0]);
$res = -1;
while(!empty($que)){
    [$node , $distance] = array_shift($que);
    if($node == $Y){
        $res = $distance;
        break;
    }

    foreach($grid[$node] as $now){
        if($visited[$now] == false){
            $visited[$now] = true;
            array_push($que,[$now,$distance+1]);
        }
    }
}
echo $res.PHP_EOL;
