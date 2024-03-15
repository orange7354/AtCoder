<?php
list($N,$S,$M,$L) = array_map('intval',explode(' ',trim(fgets(STDIN))));

$sum = $L*100;
for($i = 0; $i <= $N; $i++){
    for($j = 0; $j <= $N; $j++){
        for($k = 0; $k <= $N; $k++){
            $temp = $S*$i + $M*$j + $L*$k;
            if($i*6 + $j*8 + $k*12 >= $N){
                $sum = min($sum,$temp);
            }
        }
    }
}

echo $sum.PHP_EOL;