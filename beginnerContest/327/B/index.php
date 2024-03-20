<?php
fscanf(STDIN, "%d", $N);
$res = false;
$i = 1;
while($i ** $i <= $N){
    $tt = $i ** $i;
    if($tt == $N){
        echo $i.PHP_EOL;
        $res = true;
        exit;
    }
    $i++;
}
if(!$res){
    echo (-1).PHP_EOL;
}