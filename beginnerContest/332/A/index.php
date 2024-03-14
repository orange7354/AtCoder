<?php
fscanf(STDIN, '%d %d %d', $N, $S, $K);
$payment=0;
for($i=0;$i<$N;$i++){
    fscanf(STDIN,'%d %d',$x,$y);
    $payment += $x*$y;
}

echo $payment >= $S ? $payment.PHP_EOL : ($payment + $K).PHP_EOL;