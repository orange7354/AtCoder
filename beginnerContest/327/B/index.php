<?php
fscanf(STDIN, "%d", $N);
$res = false;
while($i <= $N){
    $tt = pow($i,$i);
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