<?php
// fscanf(STDIN, "%d", $N);
// $str = trim(fgets(STDIN));
// $strArr = str_split($str);

// $tmp = 1;
// $counter = [];
// foreach($strArr as $idx => $val){
//     if( $idx == 0 ){
//         $counter[$val] = 1;
//         $tmp = 1;
//     } else if( $strArr[$idx -1] == $val ){
//         $tmp++;
//         $counter[$val] = max($tmp, $counter[$val]);
//     } else if(isset($counter[$val])){
//         $tmp = 1;
//     } elseif(!isset($counter[$val])){
//         $counter[$val] = 1;
//         $tmp = 1;
//     }
// }

// $res = 0;

// foreach($counter as $val){
//     $res += $val;
// }

// echo $res.PHP_EOL;

// 愚直に連続する同じ文字の最大値を求めたけど。。。。
//ランレングス圧縮ってのがあるらしい
// 連続する同じ文字を圧縮するアルゴリズムのこと
$n = trim(fgets(STDIN));
$strArr = str_split(trim(fgets(STDIN)));

$sum = 0;
$prev = "";
$counter = [];
foreach($strArr as $val){
    if($prev == $val){
        $sum++;
        $counter[$prev.$sum] = 1;
    } else {
        $sum = 1;
        $prev = $val;
        $counter[$prev.$sum] = 1;
    }
}

echo count($counter).PHP_EOL;
