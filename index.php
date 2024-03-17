<?php
$str = trim(fgets(STDIN));
$arr = str_split($str);
$counter = [];
foreach ($arr as $char) {
    if (!isset($counter[$char])) {
        $counter[$char] = 0;
    }
    $counter[$char]++;
}
$length = strlen($str);
$total = $length * ($length - 1) / 2;
foreach ($counter as $count) {
    $total -= $count * ($count - 1) / 2;
}
var_dump($counter);
echo $total == 0 ? 1 : $total . PHP_EOL;