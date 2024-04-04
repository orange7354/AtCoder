<?php
fscanf(STDIN, "%d %d", $N,$X);
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

for($i = 0; $i <= 100; $i++){
    $temp = [...$arr, $i];
    sort($temp);
    $min = $temp[0];
    $max = $temp[count($temp)-1];
    $sum = array_sum($temp) - ($min + $max);
    if($sum >= $X){
        echo $i.PHP_EOL;
        exit;
    }
}

echo (-1).PHP_EOL;