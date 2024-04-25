<?php
fscanf(STDIN,"%d",$N);
for($i=0;$i<$N;++$i){
    fscanf(STDIN,"%d%d",$a,$c);
    $m[$c] = min($m[$c]??PHP_INT_MAX,$a);
}

echo max($m) . PHP_EOL;
