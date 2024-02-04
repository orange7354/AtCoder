<?php
// 入力データを読み込む
fscanf(STDIN, "%d\n", $N);
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

$map = [];
$cnt = [];

// 数値とその中央の位置をマップに格納する
for ($i = 0; $i < 3*$N; $i++) {
    if (!isset($cnt[$arr[$i]])) {
        $cnt[$arr[$i]] = 0;
    }
    $cnt[$arr[$i]]++;
    if ($cnt[$arr[$i]] == 2) {
        $map[$arr[$i]] = $i;
    }
}

// 中央の位置に基づいてマップをソートする
asort($map);

// ソートされた数値を出力する
echo implode(' ', array_keys($map)) . "\n";