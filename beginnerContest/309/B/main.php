<?php
fscanf(STDIN, "%s", $A);
$arr = [];
$tmpArr = [];

for($i=0;$i<$A;$i++){
    $tmpArr[] = array_map('intval', str_split(trim(fgets(STDIN))));
}

for($i=0;$i<$A;$i++){
    for($j=0;$j<$A;$j++){
        if($i == 0){
            if($j == 0){
                $arr[$i][] = $tmpArr[1][0];
            }else{
                $arr[$i][] = $tmpArr[0][$j-1];
            }
        }
        if($i != 0 && $i != $A-1){
            if($j == 0){
                $arr[$i][] = $tmpArr[$i+1][0];
            }elseif($j == $A-1){
                $arr[$i][] = $tmpArr[$i-1][$j];
            }else{
                $arr[$i][] = $tmpArr[$i][$j];
            }
        }
        if($i == $A-1){
            if($j==$A-1){
                $arr[$i][] = $tmpArr[$i-1][$j];
            }else{
                $arr[$i][] = $tmpArr[$i][$j+1];
            }
        }
    }
}
foreach($arr as $key => $value){
    echo implode('', $value)."\n";
}