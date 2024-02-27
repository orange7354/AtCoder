<?php
fscanf(STDIN,'%d %d',$n,$k);
$weights = explode(' ',trim(fgets(STDIN)));
$values = explode(' ',trim(fgets(STDIN)));

echo sprintf("%.10f",binarySearch($weights,$values,$n,$k)).PHP_EOL;
function binarySearch($weights,$values,$n,$k){
    $ok = 0;
    $ng = 5001;
    
    for($i = 0 ; $i < 1000; $i++){
        $mid = ($ok + $ng) / 2;
        if(calcValu($weights,$values,$mid,$k)){
            $ok = $mid;
        } else {
            $ng = $mid;
        }
    }

    return $ok;
}


function calcValu($weights,$values,$x,$k)
{
    $newArr = [];
    foreach($weights as $idx => $val){
        $newArr[] = $values[$idx] - $val * $x;
    }
    rsort($newArr);
    $res = 0;
    for($i = 0; $i < $k; $i++){
        $res += $newArr[$i];
    }

    if( $res >= 0 ){
        return true;
    }else {
        false;
    }
}


