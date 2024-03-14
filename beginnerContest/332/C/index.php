<?php
fscanf(STDIN, '%d %d', $N, $M);
$plan = array_map('intval', str_split(trim(fgets(STDIN))));

echo binary_search($N,$M,$plan) . PHP_EOL;

function binary_search($n,$m,$plan){
    $ng = -1;
    $ok = $n + 1;

    while($ok - $ng > 1){
        $mid = intdiv($ok+$ng,2);
        if(canWear($plan,$mid,$m)){
            $ok = $mid;
        } else {
            $ng = $mid;
        }
    }
    return $ok;
}

function canWear($plan,$target,$m){ 
    $stack = [
        'rogo' => $target,
        'muji' => $m,
    ];

    foreach($plan as $val){
        if($val == 0){
            $stack = [
                'rogo' => $target,
                'muji' => $m,
            ];
        } elseif($val ==1 ){
            if($stack['muji'] >= 1){
                $stack['muji'] = $stack['muji'] -1;
            } elseif($stack['rogo'] >= 1){
                $stack['rogo'] = $stack['rogo'] -1;
            } else{
                return false;
            }
        } elseif($val == 2){
            if($stack['rogo'] >= 1){
                $stack['rogo'] = $stack['rogo'] - 1;
            } else {
                return false;
            }
        }
    }

    return true;
}