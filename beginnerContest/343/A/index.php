<?php
fscanf(STDIN, '%d %d', $n, $m);
$sum = $n + $m;
for($i = 0; $i <= 9; $i++){
    if($sum != $i){
        echo $i.PHP_EOL;
        break;
    }
}