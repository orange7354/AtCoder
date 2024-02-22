<?php
fscanf(STDIN,'%d',$n);


function caluclate($n,&$memo){
    if($n == 1){
        return 0;
    }

    if(isset($memo[$n])){
        return $memo[$n];
    }

    $half = intdiv($n,2);
    $isEven = $n % 2 == 0;
    $cost = 0;
    if($isEven){
        $cost += $n + 2 * caluclate($half,$memo);
    } else {
        $cost += $n;
        $cost += caluclate($half,$memo) + caluclate($half + 1,$memo);
    }

    $memo[$n] = $cost;
    return $cost;
}

function totalCost($n){
    $memo = [];
    return caluclate($n,$memo);
}


echo totalCost($n).PHP_EOL;