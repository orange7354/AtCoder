<?php
$str = trim(fgets(STDIN));
$length = strlen($str);
$map = [];
foreach(str_split($str) as $char){
    if(isset($map[$char])){
        $map[$char]++;
    } else {
        $map[$char] = 1;
    }
}

$newMap = [];
foreach($map as $key => $value){
    if(isset($newMap[$value])){
        $newMap[$value][] = $key;
    } else {
        $newMap[$value] = [$key];
    }
}
$res = true;
for ($i = 1; $i <= $length ; $i++) {
    if( !(!isset($newMap[$i]) || count($newMap[$i]) == 2) ){
        $res = false;
        break;
    }
}

echo $res ? 'Yes' : 'No';