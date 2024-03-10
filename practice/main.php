<?php

fscanf(STDIN, '%d', $n);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
fscanf(STDIN, '%d', $m);
$B = array_map('intval', explode(' ', trim(fgets(STDIN))));
fscanf(STDIN, '%d', $k);
$C = array_map('intval', explode(' ', trim(fgets(STDIN))));
fscanf(STDIN, '%d', $q);
$q_arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($A);
sort($B);
sort($C);

foreach ($q_arr as $target) {
    $res = false;
    foreach ($A as $a) {
        $i = 0;
        $j = $k - 1;
        while ($i < $m && $j >= 0) {
            $sum = $B[$i] + $C[$j];
            if ($sum == $target - $a) {
                $res = true;
                break 2;
            } elseif ($sum < $target - $a) {
                $i++;
            } else {
                $j--;
            }
        }
    }
    
    if ($res) {
        echo 'Yes' . PHP_EOL;
    } else {
        echo 'No' . PHP_EOL;
    }
}
