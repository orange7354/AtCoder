<?php
fscanf(STDIN, "%d", $N);
$str = trim(fgets(STDIN));
$strArr = str_split($str);

$tmp = 1;
$counter = [];
foreach($strArr as $idx => $val){
    if( $idx == 0 ){
        $counter[$val] = 1;
        $tmp = 1;
    } else if( $strArr[$idx -1] == $val ){
        $tmp++;
        $counter[$val] = max($tmp, $counter[$val]);
    } else if(isset($counter[$val])){
        $tmp = 1;
    } elseif(!isset($counter[$val])){
        $counter[$val] = 1;
        $tmp = 1;
    }
}

$res = 0;

foreach($counter as $val){
    $res += $val;
}

echo $res.PHP_EOL;