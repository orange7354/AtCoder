<?php
fscanf(STDIN,'%d',$N);
for($i = $N ; $i <= 919;$i++){
    if(check(strval($i))){
        echo $i.PHP_EOL;
        break;
    }
}

function check($n){
    $hyaku = $n[0];
    $ju = $n[1];
    $ichi = $n[2];

    if($hyaku * $ju == $ichi){
        return true;
    }

    return false;
}