<?php
$input = trim(fgets(STDIN));
$maxLength = 1; 
for ($i = 0; $i < strlen($input); $i++) {
    for ($j = 0; $i - $j >= 0 && $i + $j < strlen($input); $j++) {
        if ($input[$i - $j] != $input[$i + $j]) {
            break;
        }
        $maxLength = max($maxLength, 2 * $j + 1);
    }
    
    for ($j = 0; $i - $j >= 0 && $i + $j + 1 < strlen($input); $j++) {
        if ($input[$i - $j] != $input[$i + $j + 1]) {
            break;
        }
        $maxLength = max($maxLength, 2 * ($j + 1));
    }
}

echo $maxLength . PHP_EOL;
