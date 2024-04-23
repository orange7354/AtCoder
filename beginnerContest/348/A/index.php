<?php
fscanf(STDIN,'%d',$N);
$res = [];
for( $i = 1; $i <= $N; $i++ ){
    if($i % 3 == 0) {
        $res[] = 'x';
    }else{
        $res[] = 'o';
    }
}

echo implode('',$res).PHP_EOL;
