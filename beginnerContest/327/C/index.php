<?php
$row = [];
$column = [];
$group = [];
$res = false;
for($i = 0; $i < 9; $i++){
    $arr = array_map('intval',explode(' ',trim(fgets(STDIN))));
    foreach($arr as $idx => $a){
        $row[$idx][] = $a;
    }
    $column[] = $arr;
}

foreach(array_chunk($column,3) as $idx => $g){
    foreach($g as $val){
        for($i = 0 ; $i < 9; $i+=3){
            $group[$idx][$i][] = $val[$i];
            $group[$idx][$i][] = $val[$i+1];
            $group[$idx][$i][] = $val[$i+2];
        }
    }
}

$rowRes = res($row);
$columnRes = res($column);
$groupRes = false;
foreach($group as $val){
    $groupRes = res($val);
    if(!$groupRes){
        $groupRes = false;
        break;
    }
}



function res($arr){
    foreach($arr as $val){
        $res = check($val);
        if(!$res) return false;
    }

    return true;
}



function check($arr){
    $check = [
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false,
        9 => false,
    ];

    foreach($arr as $val){
        $check[$val] = true;
    }

    foreach($check as $val){
        if($val == false){
            return false;
        }
    }

    return true;
}






if($rowRes && $columnRes && $groupRes){
    echo 'Yes'.PHP_EOL;
}else{
    echo 'No'.PHP_EOL;
}
