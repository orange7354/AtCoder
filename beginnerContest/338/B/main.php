<?php
// fscanf(STDIN, "%d", $n);
$a = trim(fgets(STDIN));
$a = str_split($a);
$arr = [];
foreach ($a as $key => $value) {
    if (isset($arr[$value])) {
        $arr[$value]++;
    } else {
        $arr[$value] = 1;
    }
}
$maxValue = max($arr);
$newArr = [];
foreach ($arr as $key => $value) {
    if ($value == $maxValue) {
        $newArr[] = $key;
    }
}
sort($newArr);
echo $newArr[0].PHP_EOL;
