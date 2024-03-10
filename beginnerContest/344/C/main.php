<?php
function readIntegers() {
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

//それぞれ、配列の要素数が100程度である為、
//全てfor文で回しても計算量は10^6程度であり、1000000
//単純な操作である為、十分間に合う。


fscanf(STDIN, '%d', $n);
$A = readIntegers();
fscanf(STDIN, '%d', $m);
$B = readIntegers();
fscanf(STDIN, '%d', $k);
$C = readIntegers();
fscanf(STDIN, '%d', $q);
$X = readIntegers();

$ok = [];
for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $m; $j++) {
        for($l = 0; $l < $k; $l++) {
            $ok[$A[$i] + $B[$j] + $C[$l]] = true;
        }
    }
}

$ans = [];
foreach($X as $x) {
    if (isset($ok[$x])) {
        $ans[] = 'Yes';
    } else {
        $ans[] = 'No';
    }
}

echo implode(PHP_EOL, $ans).PHP_EOL;