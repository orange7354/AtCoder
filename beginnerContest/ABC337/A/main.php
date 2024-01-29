<?php
fscanf(STDIN,'%s',$N);
$takahashi = 0;
$aoki = 0;
for($i = 0; $i < $N; $i++){
    fscanf(STDIN,'%s %s',$x , $y);
    $takahashi += $x;
    $aoki += $y;
}

if($takahashi > $aoki){
    echo "Takahashi".PHP_EOL;
}elseif($takahashi < $aoki){
    echo "Aoki".PHP_EOL;
}else{
    echo "Draw".PHP_EOL;
}