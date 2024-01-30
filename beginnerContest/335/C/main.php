<?php
fscanf(STDIN,'%s %s',$N,$q);

$ryu = [1 ,0];
$his = [];
$res = [];
for($i = 0; $i < $q; $i++){
    $que = explode(" ",trim(fgets(STDIN)));
    if($que[0] == 1){
        if($que[1] == "R"){
            $ryu[0] += 1;
        } else if($que[1] == "L"){
            $ryu[0] -= 1;
        } else if($que[1] == "U"){
            $ryu[1] += 1;
        } else if($que[1] == "D"){
            $ryu[1] -= 1;
        }
        $his[] = $ryu;
    } else {
        $num = $que[1];
        if(count($his) >= $num){
            $res[] = $his[count($his) - $num];
        } else {
            if(count($his) == 0){
                $res[] = [$num,0];
            }else{
                $res[] = [ $num - count($his) , 0 ];
            }
        }
    }
}
foreach($res as $value){
    echo implode(" ",$value) . "\n";
}