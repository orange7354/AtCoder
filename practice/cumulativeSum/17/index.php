<?php
///url https://paiza.jp/works/mondai/prefix_sum_problems/prefix_sum_problems__2dsection_sum_step1/edit?language_uid=php
// 二次元累積和 1

// 入力の二次元配列
$A = [
    [1, 2, 3, 4, 5],
    [2, 3, 4, 5, 6],
    [3, 4, 5, 6, 7],
    [4, 5, 6, 7, 8],
    [5, 6, 7, 8, 9]
];

$h = count($A);
$w = count($A[0]);

// 累積和を計算するための配列 s を初期化
$s = array_fill(0, $h + 1, array_fill(0, $w + 1, 0));

// 累積和を計算
for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        $s[$y + 1][$x + 1] = $s[$y][$x + 1] + $s[$y + 1][$x] - $s[$y][$x] + $A[$y][$x];
    }
}

// 長方形領域の左上と右下の座標
$sy = 1;
$sx = 1;
$gy = 4;
$gx = 4;

// 長方形領域内の整数の和を計算
$sum = $s[$gy][$gx] - $s[$sy][$gx] - $s[$gy][$sx] + $s[$sy][$sx];

// 結果を出力
echo $sum . PHP_EOL;
?>