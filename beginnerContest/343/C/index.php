<?php
fscanf(STDIN, '%d', $N);

$max = 0;
for($i = 0; $i * $i * $i <= $N; $i++) {
    $check = $i * $i * $i;
    if(strrCheck($check)) {
        $max = max($max, $check);
    }
}
function strrCheck($number) {
    $number = (string)$number;
    $length = strlen($number);
    for($i = 0; $i < $length / 2; $i++) {
        if($number[$i] !== $number[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}

echo $max.PHP_EOL;