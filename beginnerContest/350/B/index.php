<?php
list($n,$q) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$init = array_fill(1, $n, 1);

foreach($arr as $val){
    if($init[$val] == 1){
        $init[$val] = 0;
    } else {
        $init[$val] = 1;
    }
}
echo array_sum($init).PHP_EOL;
