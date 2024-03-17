<?php
$str = trim(fgets(STDIN));
$strArr = str_split($str);
$n = strlen($str);

function c2($n){
    return $n * ($n - 1) / 2;
}


$counter = [];
foreach ($strArr as $char) {
    if (!isset($counter[$char])) {
        $counter[$char] = 0;
    }
    $counter[$char]++;
}

$total = c2($n);
// someがぁああ　同じ文字を交換するときに、与えられた文字列と同じになるので、1を足すここ忘れてた！！
$some = 0;
foreach ($counter as $count) {
    if($count > 1) $some = 1;
    $total -= c2($count);
}
echo $total + $some . PHP_EOL;
