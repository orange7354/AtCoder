<?php
fscanf(STDIN,'%d %d',$N,$L);
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
$counter = 0;
foreach($arr as $idx => $val){
    if($val >= $L){
        $counter += 1;
    }
}

echo $counter.PHP_EOL;