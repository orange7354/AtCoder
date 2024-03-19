<?php
fscanf(STDIN, "%d", $N);
$str = trim(fgets(STDIN));

if( strpos($str, 'ab') !== false || strpos($str, 'ba') !== false){
    echo 'Yes'.PHP_EOL;
} else {
    echo 'No'.PHP_EOL;
}