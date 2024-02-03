<?php
fscanf(STDIN,'%s %s',$h,$w);
$grid = [];
$xGrid = [];
$startX = [];
$counter = [];

for($i = 0; $i < $h; $i++){
    $wGrid = str_split(trim(fgets(STDIN)));
    $count = array_filter($wGrid,function($item){
        return $item == '#';
    });
    foreach($wGrid as $x => $mark){
        $xGrid[$x][$i] = $mark;
    }

    $grid[$i] =  $wGrid;
    $counter[$i] = count($count);
    $startX[$i] = array_search('#',$wGrid);
}

$maxG = max($counter);
$resY = 1;
$xCounter = [];
foreach($xGrid as $x => $val){
    $count = array_filter($val,function($item){
        return $item == '#';
    });
    $xCounter[$x] = count($count);
}
$xCounter = array_filter($xCounter,function($item){
    return $item != 0;
});


foreach($grid as $idx => $val){
    if($counter[$idx] != 0 && $counter[$idx] < $maxG ){
        $resY = $idx + 1;
    }
}
$y = array_search(min($xCounter),$xCounter) + 1;
echo $resY .' '.$y;
