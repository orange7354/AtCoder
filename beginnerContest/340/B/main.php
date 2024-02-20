<?php
fscanf(STDIN, "%d", $q);

$que = [];

for($i = 0; $i < $q; $i++) {
    fscanf(STDIN, "%d %d", $l, $n);
    if($l == 1){
        array_unshift($que, $n);
    } else {
        echo $que[$n-1].PHP_EOL;
    }
}
