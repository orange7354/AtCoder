<?php
fscanf(STDIN,'%s',$N);

function findNthNumber($n) {
    $result = "";
    $n--;
    while ($n > 0) {
        $digit = $n % 5;
        $n = floor($n / 5);
        $result = strval($digit * 2) . $result;
    }
    return $result !== "" ? $result : "0";
}

echo findNthNumber($N) . "\n"; 