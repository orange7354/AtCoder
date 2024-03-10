<?php
fscanf(STDIN,'%d',$n);
$arr = explode(' ',trim(fgets(STDIN)));
$arr = array_flip($arr);
fscanf(STDIN,'%d',$q);
for($i = 0; $i < $q; $i++ ){
    $qs = explode(' ',trim(fgets(STDIN)));
    if($arr[$qs[0]] > $arr[$qs[1]]){
        echo $qs[1].PHP_EOL;
    } elseif( $arr[$qs[0]] < $arr[$qs[1]] ){
        echo $qs[0].PHP_EOL;
    }
}

