<?php
$arr = array_map('intval', str_split(trim(fgets(STDIN))));
$res = true;
foreach($arr as $idx => $val){
    if($idx == 0) continue;
    if($arr[$idx-1] <= $val){
        $res = false;
    }
}

echo $res ? 'Yes'.PHP_EOL : 'No'.PHP_EOL;