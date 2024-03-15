<?php
fscanf(STDIN,'%d %d',$M,$D);
fscanf(STDIN,'%d %d %d',$y,$m,$d);

if($D < $d + 1){
    $d = $d - $D + 1;
    $m += 1;
    if($m > $M){
        $m = $m - $M;
        $y++;
    }
} else {
    $d++;
}

echo $y.' '.$m.' '.$d.PHP_EOL;