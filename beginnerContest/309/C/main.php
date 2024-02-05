<?php
list($n,$k)=explode(" ",trim(fgets(STDIN)));
$map[1]=0;
$i=0;
while($i<$n){
    list($a,$b)=explode(" ",trim(fgets(STDIN)));
    $map[1]+=$b;
    if(!isset($map[$a+1])){
        $map[$a+1]=-$b;
    }else{
        $map[$a+1]-=$b;
    }
    ++$i;
}
ksort($map);
$ans=0;
foreach($map as $key=>$v){
    $ans+=$v;
    if($ans<=$k){
        echo $key;
        exit;
    }
}