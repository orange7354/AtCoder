<?php
fscanf(STDIN,'%d',$N);
$A = array_map('intval',explode(' ',trim(fgets(STDIN))));
$counter = [];
foreach($A as $a){
    if(!isset($counter[$a])){
        $counter[$a] = 0;
    }
    $counter[$a]++;
}

echo count($counter) == 1 ? 'Yes'.PHP_EOL : 'No'.PHP_EOL;