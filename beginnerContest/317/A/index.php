<?php
list($n,$h,$x) = array_map('intval',explode(' ',trim(fgets(STDIN))));
$resIdx = false;
$res = PHP_INT_MAX;
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
foreach($arr as $idx => $val){
    if($h + $val >= $x){
        if($res > $val){
            $resIdx = $idx + 1;
            $res = $val;
        }
    }
}

echo $resIdx.PHP_EOL;