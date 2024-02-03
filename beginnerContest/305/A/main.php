<?php
fscanf(STDIN,"%s",$N);

$arr = str_split(strrev($N));
if( $arr[0] <= 2 ){
    $arr[0] = 0;
    echo implode('',array_reverse($arr)).PHP_EOL;
}else if( $arr[0] >= 8 ){
    $arr[0] = 0;
    $arr[1] += 1;
    echo implode('',array_reverse($arr)).PHP_EOL;
}else{
    $arr[0] = 5;
    echo implode('',array_reverse($arr)).PHP_EOL;
}
