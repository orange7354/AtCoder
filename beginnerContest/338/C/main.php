<?php
fscanf(STDIN, "%d", $n);
$Q = explode(" ", fgets(STDIN));
$A = explode(" ", fgets(STDIN));
$B = explode(" ", fgets(STDIN));

/*
    料理AをX人分作るときのXの最大値を二分探索で求め、
    Aをへらしていき、その時のBの最大値を二分探索で求める方針だとTLEになる。

    解説を参考に、Xを全探索する方針に変更。
    残りの材料で最大何人分の料理Bが作れるかを計算します。
    X人分作るときの(Qi - Ai*x) / Biの最小値を求める。
    全ての材料が必要なので、これらの値の中で最小のものが、実際に作れる料理Bの最大人数を決定します。
*/


function maxMeals($N, $Q, $A, $B) {
    $maxMeals = 0;

    for ($x = 0; $x <= max($Q); $x++) {
        $minBMeals = PHP_INT_MAX;
        $possible = true;

        for ($i = 0; $i < $N; $i++) {
            if ($Q[$i] - $A[$i] * $x < 0) {
                $possible = false;
                break;
            }

            if ($B[$i] > 0) {
                $minBMeals = min($minBMeals, intdiv($Q[$i] - $A[$i] * $x, $B[$i]));
            }
        }

        if ($possible) {
            $maxMeals = max($maxMeals, $x + $minBMeals);
        }
    }

    return $maxMeals;
}


echo maxMeals($N, $Q, $A, $B) . "\n";
