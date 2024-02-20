<?php
fscanf(STDIN, "%d %d %d", $A, $B ,$D);
$arr = [];
for($i = $A; $i <= $B; $i+=$D) {
    $arr[] = $i;
}

echo implode(" ", $arr).PHP_EOL;