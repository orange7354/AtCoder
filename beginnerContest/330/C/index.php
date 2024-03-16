<?php
$D = (int)trim(fgets(STDIN));
/**
 * Dに最も近いX^2 + Y^2は?
 * × × × ○ D ○ × × ×
 * xを1-> sqrt(D) まで探索
 * その時のYは　y = sqrt(D - X^2) になる
 * 計算量はo(sqrt(D))
 */
function findMinDifference($D) {
    //sqrt($D) - x が　< 0 にならないようにfloorで切り捨てる。
    $mx = floor(sqrt($D));
    $ans = PHP_INT_MAX;
    for ($x = 1; $x <= $mx; $x++) {
        $ya = $D - $x * $x;
        //y = sqrt(D - X^2)
        $y = sqrt($ya);

        if ($y * $y === $ya) {
            return 0;
        }
        //D以下で一番近い値と、D以上で一番近い値を計算する為。
        $ly = floor($y);
        $uy = ceil($y);

        $a1 = $x * $x + $ly * $ly - $D;
        $a2 = $x * $x + $uy * $uy - $D;

        $ans = min($ans, abs($a1), abs($a2));
    }

    return $ans;
}

$ans = findMinDifference($D);
printf("%d\n", $ans);