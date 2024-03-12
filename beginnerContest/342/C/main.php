<?php

function array_element_to_int($array) {
    return array_map('intval', $array);
}
function get_string() {
    return trim(fgets(STDIN));
}
function get_strings() {
    return explode(' ', trim(fgets(STDIN)));
}

function get_int() {
    return (int)trim(fgets(STDIN));
}

$N = get_int();
$S = str_split(get_string());

$Q = get_int();

$alpha = range('a', 'z');
$transformations = array_combine($alpha, $alpha);

for ($i = 0; $i < $Q; $i++) {
    list($c, $d) = get_strings();
    foreach ($transformations as $key => $value) {
        if ($value === $c) {
            $transformations[$key] = $d;
        }
    }
}


$transformedString = '';
foreach ($S as $character) {
    $transformedString .= $transformations[$character] ?? $character;
}

echo $transformedString . PHP_EOL;
?>
