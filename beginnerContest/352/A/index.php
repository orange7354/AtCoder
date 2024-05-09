<?php
[$n,$x,$y,$z] = array_map('intval',explode(' ',(trim(fgets(STDIN)))));
for($i = $x; $i<=$y;$i++){
    if($i == $z){
        echo 'Yes'.PHP_EOL;
        exit;
    }
}

for($i = $x; $i >= $y;$i--){
    if($i == $z){
        echo 'Yes'.PHP_EOL;
        exit;
    }
}

echo 'No'.PHP_EOL;