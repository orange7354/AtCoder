<?php
fscanf(STDIN,'%s',$L);
for($i = 0 ; $i <= $L ; $i++){
    for($j = 0 ; $j <= $L - $i; $j++){
        for($k = 0 ; $k <= $L - ($i + $j); $k++){
            echo $i.' '.$j.' '.$k."\n";
        }
    }
}