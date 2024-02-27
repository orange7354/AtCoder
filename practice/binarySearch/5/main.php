<?php
fscanf(STDIN,'%d %d',$n,$k);
// echo intdiv($n,$k);
$pips = explode(' ',trim(fgets(STDIN)));

echo sprintf("%.10f",binarySearch($pips,$n,$k)) . "\n";
function binarySearch($pips,$n,$k){
    $ok = 0;
    $ng = 10000;

    for($i = 0; $i <= 50; $i++){
        $mid = ($ok + $ng) / 2;

        if(canCut($mid,$k,$pips)){
            $ok = $mid;
        } else {
            $ng = $mid;
        }
    }

    return $ok;
}

function canCut($len,$k,$pips){
    $count = 0;
    foreach($pips as $p){
        $count += floor($p/$len);
    }

    if($count < $k){
        return false;
    } else {
        return $count;
    }

}