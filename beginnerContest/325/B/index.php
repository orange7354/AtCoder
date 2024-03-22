<?php
fscanf(STDIN,'%d',$N);
$arr = [];
for($i = 0; $i < $N; $i++){
    [$w,$x] = explode(' ', trim(fgets(STDIN)));
    $arr[$x] = isset($arr[$x]) ? $arr[$x] + $w : $w;
}

$ans = 0;
for($i = 0; $i <= 24; $i++){
    $temp = 0;
    foreach($arr as $time => $people){
        $now = $time + $i >= 24 ? $time + $i - 24 : $time + $i;
        if(9 <= $now && $now <= 17){
            $temp = $temp + $people;
        }
    }

    $ans = max($ans,$temp);
}

echo $ans.PHP_EOL;