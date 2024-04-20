<?php
fscanf(STDIN, "%d", $N);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$operations = [];

for ($i = 0; $i < $N; $i++) {
    while ($A[$i] != $i + 1) {
        $swapIndex = $A[$i] - 1;
        $operations[] = ($i + 1) . " " . ($swapIndex + 1);
        $temp = $A[$swapIndex];
        $A[$swapIndex] = $A[$i];
        $A[$i] = $temp;
    }
}


echo count($operations) . PHP_EOL;
foreach ($operations as $op) {
    echo $op . PHP_EOL;
}