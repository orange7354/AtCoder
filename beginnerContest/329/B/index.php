<?php
fscanf(STDIN, "%d", $N);
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$counter = [];
foreach($arr as $val){
    if(!isset($counter[$val])){
        $counter[$val] = 0;
    }
    $counter[$val]++;
}
krsort($counter);
echo array_keys($counter)[1].PHP_EOL;