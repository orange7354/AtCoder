<?php
fscanf(STDIN, '%d', $n);

for($i = 0; $i < $n; $i++){
    $arr = explode(' ', trim(fgets(STDIN)));
    $ans = [];
    foreach($arr as $idx => $val){
        if($val == 1){
            $ans[] = $idx + 1;
        }
    }
    if(!empty($ans)){
        echo implode(' ', $ans) . PHP_EOL;
    }
}