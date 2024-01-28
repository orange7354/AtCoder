<?php
fscanf(STDIN, "%d", $n);
$grams = explode(" ", fgets(STDIN));
$a = explode(" ", fgets(STDIN));
$b = explode(" ", fgets(STDIN));

$aMax = serachMax($a, $b,$grams);
echo $aMax.PHP_EOL;

function serachMax($a,$b ,$grams){
    $left = 0;
    $right = max($grams);

    while($left <= $right){
        $mid = floor(($left + $right) / 2);
        $flg = bb($mid,$a,$b,$grams);

        if($flg){
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $right;
}

function bb ($mid,$a,$b,$grams){
    $flg = true;
    for($i = 0; $i <$mid; $i++){
        foreach($grams as $key => $value){
            if($value >=  $a[$key] * $i + $b[$key] * ($mid - $i) ){
                $flg = true;
            } else {
                $flg = false;
                break;
            }
        }
    }

    if($flg) return $flg;

    for($i = $mid + 1; $i <= max($grams); $i++){
        foreach($grams as $key => $value){
            if($value >=  $a[$key] * ($mid - $i) + $b[$key] * $i ){
                $flg = true;
            } else {
                $flg = false;
                break;
            }
        }
    }


    return $flg;
}

