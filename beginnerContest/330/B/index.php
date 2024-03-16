<?php
fscanf(STDIN,'%d %d %d',$N,$L,$R);
$arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
$result = [];
foreach($arr as $val){
    if($L <= $val && $val <= $R){
        $result[] = $val;
    } elseif($val < $L){
        $result[] = $L;
    } elseif($val > $R){
        $result[] = $R;
    }
}

echo implode(' ',$result).PHP_EOL;

