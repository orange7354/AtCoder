<?php
fscanf(STDIN, "%d", $N);
$s = [];
for ($i = 0; $i < $N; ++$i) {
    fscanf(STDIN, "%s", $s[$i]);
}
/**
 * o....o
 * ......
 * o.....
 * 行、列ともに同じ位置二つ○がある必要がある。
 * 事前にそれぞれ行と列に○が何個あるか調査する。O(N^2)
 * 
 * 
 */

// 各行と各列の 'o' の数を数える
$row_counts = array_fill(0, $N, 0);
$col_counts = array_fill(0, $N, 0);
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($s[$i][$j] == "o") {
            $col_counts[$j]++;
            $row_counts[$i]++;
        }
    }
}


$answer = 0;
for ($i = 0; $i < $N;$i++) {
    for ($j = 0; $j < $N;$j++) {
        if ($s[$i][$j] == "o") {
            $answer += ($col_counts[$j] - 1) * ($row_counts[$i] - 1);
        }
    }
}


echo $answer . PHP_EOL;

?>