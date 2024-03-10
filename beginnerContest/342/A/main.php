<?php

$strArr = str_split(trim(fgets(STDIN)));
$counter = [];
foreach ($strArr as $idx => $str) {
    if (isset($counter[$str])) {
        $counter[$str]++;
    } else {
        $counter[$str] = 1;
    }
}

foreach ($counter as $key => $val) {
    if ( $val ==  1) {
        foreach ($strArr as $idx => $str) {
            if ($str == $key) {
                echo $idx + 1 . PHP_EOL;
                break;
            }
        }
    }
}