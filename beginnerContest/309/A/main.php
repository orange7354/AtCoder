<?php
fscanf(STDIN, "%s %s", $A, $B);
if($B-$A == 1){
    if($A%3 == 0 && $B-$A == 1){
        echo 'No'.PHP_EOL;
    }else{
        echo 'Yes'.PHP_EOL;
    }
}else{
    echo 'No'.PHP_EOL;
}