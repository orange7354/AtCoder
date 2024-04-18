<?php
$n = trim(fgets(STDIN));
$init = array_fill(0,11,array_fill(0,11,0));

for($i = 0; $i < $n; $i++){
    [$xa,$xb,$ya,$yb] = explode(' ',trim(fgets(STDIN)));
    for($j = $ya; $j < $yb ; $j++){
        for($k = $xa; $k < $xb; $k++){
            $init[$j][$k] = 1;
        }
    }
}

$res = 0;
foreach($init as $val){
    $res += array_sum($val);
}
echo $res.PHP_EOL;