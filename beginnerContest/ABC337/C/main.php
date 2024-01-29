<?php
fscanf(STDIN,'%s',$N);
$pepople = explode(' ',trim(fgets(STDIN)));

$firstIdx = array_search(-1,$pepople);
$fliped = array_flip($pepople);
$fliped = array_map(function($v){
    return $v + 1;
},$fliped);
$res = [$firstIdx + 1];

for($i=0;$i<$N-1;$i++){
    $res[] = $fliped[$res[$i]];
}

echo implode(' ',$res).PHP_EOL;
