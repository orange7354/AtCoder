<?php
fscanf(STDIN,'%d %d %d',$l,$n,$k);
$arr = explode(' ',trim(fgets(STDIN)));

array_push($arr,$l);
echo binarySearch($l,$arr,$n).PHP_EOL;


function binarySearch($l,$arr,$n){
    $ok = 0;
    $ng = $l + 1;


    while($ng - $ok > 1){
        $mid = intdiv($ok + $ng,2);
        if(pipCut($mid,$arr,$n)){
            $ok = $mid;
        } else {
            $ng = $mid;
        }

    }

    return $ok;
}

function pipCut($x,$arr,$n){
    $count = 0;
    $temp = 0;
    foreach($arr as $idx => $val){
        if($val - $temp >= $x){
            $count += 1;
            $temp = $val;
        }
    }
    if($count >= $n){
        return true;
    } else {
        return false;
    }
}