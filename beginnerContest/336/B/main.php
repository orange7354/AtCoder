<?php
fscanf(STDIN,'%s',$N);
$t = decbin($N);
$arr = str_split($t);
$reversed = array_reverse($arr);

$target = 0;
$count = 0;
foreach($reversed as $key => $value){
    if($value == 0){
        $count++;
    }else{
        break;
    }
}

echo $count.PHP_EOL;