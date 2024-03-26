<?php
fscanf(STDIN,'%d',$N);
$res = [];
for($i = 0; $i < $N; $i++){
    $s = str_split(trim(fgets(STDIN)));
    foreach($s as $key => $value){
        if($value == 'o'){
            if(isset($res[$i + 1])){
                $res[$i + 1]++;
            }else{
                $res[$i + 1] = 1;
            }
        } else {
            if(!isset($res[$i + 1])){
                $res[$i + 1] = 0;
            }
        }
    }
}

$max = 0;
$ans = [];
foreach($res as $k => $v){
    if(isset($ans[$v])){
        $ans[$v][] = $k;
    }else{
        $ans[$v] = [$k];
    }
}
krsort($ans);
$final = [];
foreach($ans as $k => $v){
    sort($v);
    foreach($v as $vv){
        $final[] = $vv;
    }
}


echo implode(' ',$final).PHP_EOL;