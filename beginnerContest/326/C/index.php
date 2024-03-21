<?php
fscanf(STDIN, "%d %d", $N, $M);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($A);
$ans = 0;
for($i = 0; $i < $N; $i++){
    $x = $A[$i];
    $ok = $i - 1;
    $ng = $N;

    while($ng - $ok > 1){
        $mid = intdiv($ok+$ng,2);

        if($A[$mid] < $x + $M){
            $ok = $mid;
        } else {
            $ng = $mid;
        }
    }

    $ans = max($ans,$ok - $i + 1);
}

echo $ans .PHP_EOL;