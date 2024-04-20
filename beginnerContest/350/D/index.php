<?php
//TODO: TLE・RE　未解決
list($N,$M) = explode(" ",trim(fgets(STDIN)));
$map = [];
$friends = [];
for($i = 0; $i < $M; $i++){
    list($a,$b) = explode(" ",trim(fgets(STDIN)));
    $map[$a][$b] = true;
    $map[$b][$a] = true;
    $friends[] = [$a,$b];
}

echo counter($friends,$map).PHP_EOL;

function counter($friends,$graph) {

    $result = 0;
    $processed = [];

    foreach ($friends as list($A, $B)) {
        foreach ($graph[$A] as $X => $isFriend) {
            if ($X != $B && !isset($graph[$B][$X])) {
                if (!isset($processed["$B,$X"]) && !isset($processed["$X,$B"])) {
                    $graph[$B][$X] = true;
                    $graph[$X][$B] = true;
                    $result++;
                    $processed["$B,$X"] = true;
                }
            }
        }
    }

    return $result;
}
