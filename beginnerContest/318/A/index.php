<?php
fscanf(STDIN,'%d %d %d',$n,$m,$p);
$res = [];
for($i = 1; $i<=$n; $i++){
    if($i == $m) $res[] = $i;
    else if( $i >= $m && ($i - $m) % $p == 0 ) $res[] = $i;
}
echo count($res).PHP_EOL;