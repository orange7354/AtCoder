<?php
$input = explode(" ", trim(fgets(STDIN)));
$result = 0;
for ($i = 0; $i < 64; $i++) {
    if ($input[$i] == 1) {
        $result = bcadd($result, bcpow(2, $i));
    }
}
echo $result;