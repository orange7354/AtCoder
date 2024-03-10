<?php
$add = [];

while (($line = trim(fgets(STDIN))) !== '0') {
    $add[] = $line;
}

krsort($add);
echo '0' . PHP_EOL;
foreach ($add as $val) {
    echo $val . PHP_EOL;
}