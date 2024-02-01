<?php
$arr = str_split(trim(fgets(STDIN)));
$arr_2 = str_split(trim(fgets(STDIN)));

$grid = [ 'A', 'B', 'C', 'D','E'];
$grid2 = [ 'A','E','D','C','B'];
$num = abs(array_search($arr[0],$grid) - array_search($arr[1],$grid));
$num2 = abs(array_search($arr_2[0],$grid) - array_search($arr_2[1],$grid));

$numb = abs(array_search($arr[0],$grid2) - array_search($arr[1],$grid2));
$numb2 = abs(array_search($arr_2[0],$grid2) - array_search($arr_2[1],$grid2));

$num = $numb < $num ? $numb : $num;
$num2 = $numb2 < $num2 ? $numb2 : $num2;

if( $num == $num2 ){
    echo 'Yes'.PHP_EOL;
}else{
    echo 'No'.PHP_EOL;
}