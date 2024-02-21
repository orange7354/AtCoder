<?php

function calculateCost($x, &$memo) {
    // ベースケース: xが1の場合、追加のコストは発生しない
    if ($x == 1) {
        return 0;
    }
    // メモに計算済みの値が存在する場合はそれを返す
    if (isset($memo[$x])) {
        return $memo[$x];
    }
    // xを2で割った商と剰余を計算
    $half = intdiv($x, 2);
    $isEven = $x % 2 == 0;
    // xが偶数の場合は、両方の子が同じ値になる
    if ($isEven) {
        $cost = $x + 2 * calculateCost($half, $memo);
    } else {
        // xが奇数の場合は、2つの異なる子に対して計算
        $cost = $x + calculateCost($half, $memo) + calculateCost($half + 1, $memo);
    }
    // 計算したコストをメモに保存して返す
    $memo[$x] = $cost;
    return $cost;
}

// メイン処理
function totalCost($N) {
    $memo = [];
    return calculateCost($N, $memo);
}

fscanf(STDIN, "%d", $N);
echo totalCost($N).PHP_EOL;
