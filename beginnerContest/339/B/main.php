<?php
fscanf(STDIN,"%d%d%d",$H,$W,$N);
$m = array_fill(0,$H,str_pad("",$W,"."));

$y = 0;
$x = 0;
$yp = [-1,0,1,0];
$xp = [0,1,0,-1];
$d = 0;
while($N--){
    if($m[$y][$x]=="."){
        $d = ($d+1)%4;
        $m[$y][$x] = "#";
    }else{
        $d = ($d-1+4)%4;
        $m[$y][$x] = ".";
    }
    $y = ($y+$yp[$d]+$H)%$H;
    $x = ($x+$xp[$d]+$W)%$W;
}

echo implode(PHP_EOL,$m) . PHP_EOL;

?>