<?php
fscanf(STDIN,'%d',$n);
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
$res = [];

for($i = 0; $i <= $n - 2; $i++){
    $res[] = $arr[$i] * $arr[$i + 1];
}

echo implode(' ',$res).PHP_EOL;