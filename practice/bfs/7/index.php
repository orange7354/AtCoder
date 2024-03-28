<?php
fscanf(STDIN, "%d %d", $N, $X);
$grid = [];
for($i = 0; $i < $N - 1; $i++){
    [$a,$b] = explode(' ',trim(fgets(STDIN)));
    $grid[$a][] = $b;
    $grid[$b][] = $a;
}
sort($grid[$X]);

foreach($grid[$X] as $v){
    echo $v.PHP_EOL;
}