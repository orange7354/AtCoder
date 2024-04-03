<?php
fscanf(STDIN, "%d %d", $N,$M);
$S = str_split(trim(fgets(STDIN)));
$T = str_split(trim(fgets(STDIN)));

$f = true;
$l = true;
foreach($S as $idx => $val){
    if($val != $T[$idx]){
        $f = false;
        break;
    }
}
$rS = array_reverse($S);
$rT = array_reverse($T);
foreach($rS as $idx => $val){
    if($val != $rT[$idx]){
        $l = false;
        break;
    }
}

if($f && $l){
    echo '0'.PHP_EOL;
}else if ($f) {
    echo '1'.PHP_EOL;
} else if($l){
    echo '2'.PHP_EOL;
} else {
    echo '3'.PHP_EOL;
}