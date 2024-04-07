<?php
// url :https://paiza.jp/works/mondai/bfs_dfs_problems/bfs_dfs_problems__grid_dfs_three_times
fscanf(STDIN,"%d %d %d %d",$H,$W,$Y,$X);
$map = [];
for($i=0;$i<$H;$i++){
    $map[] = array_fill(0,$W,'.');
}
dfs($Y,$X,0,$H,$W,$map);

function dfs($y,$x,$distance,$H,$W,&$map){
    $step = [
        [-1, 0], // 上
        [0, 1],  // 右
        [1, 0],  // 下
        [0, -1]  // 左
    ];
    foreach($step as $arr){
        $ny = $y + $arr[0];
        $nx = $x + $arr[1];
        if($ny >= 0 && $ny < $H && $nx >= 0 && $nx < $W){
            if($distance == 2){ // 3マス移動した後の座標を出力
                echo $ny.' '.$nx.PHP_EOL;
                continue;
            }
            dfs($ny,$nx,$distance + 1,$H,$W,$map);
        }
    }
}