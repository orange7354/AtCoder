<?php
$n = intval(trim(fgets(STDIN)));
$a = array_map('intval', explode(" ", trim(fgets(STDIN))));
$c = 0;
for ($i = 0; $i < $n; $i++) {
    if (($c + $a[$i]) < 0) {
        $c = 0;
    } else {
        $c += $a[$i];
    }
}
echo $c;