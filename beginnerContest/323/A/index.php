<?php
$strs = str_split(trim(fgets(STDIN)));

$res = true;

for($i = 2; $i <= 16; $i += 2){
    if($strs[$i - 1] != 0){
        $res = false;
        break;
    }
}

echo ($res ? 'Yes' : 'No').PHP_EOL;