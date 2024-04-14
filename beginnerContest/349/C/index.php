<?php
$str = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

$positions = array_fill(0, 26, []);
for ($i = 0; $i < strlen($str); $i++) {
    $index = ord($str[$i]) - ord('a');
    $positions[$index][] = $i;
}

$res = false;
if ($t[2] == 'X') {
    $t = substr($t, 0, 2);
}

$found = true;
$last_pos = -1;
foreach (str_split($t) as $char) {
    $char_index = ord(strtoupper($char)) - ord('A');
    $found = false;
    foreach ($positions[$char_index] as $pos) {
        if ($pos > $last_pos) {
            $last_pos = $pos;
            $found = true;
            break;
        }
    }
    if (!$found) {
        break;
    }
}

if ($found) {
    $res = true;
}

echo $res ? "Yes" : "No";
