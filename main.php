<?php
$S = trim(fgets(STDIN));
$n = strlen($S);

$charCount = array_fill(0, 26, 0);
foreach (str_split($S) as $char) {
    $charCount[ord($char) - ord('a')]++;
}

$pairCount = 0;
foreach ($charCount as $count) {
    if ($count >= 2) {
        $pairCount++;
    }
}

$result = ($pairCount == 1 && $charCount[array_search(max($charCount), $charCount)] == $n) ? 1 : $n * ($n - 1) / 2 - $pairCount;
echo $result . "\n";