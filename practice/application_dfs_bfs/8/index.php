<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems_advanced/bfs_dfs_problems_advanced__connected
list($n, $m, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$grid = [];
for ($i = 0; $i < $n; $i++) {
    $grid[] = str_split(trim(fgets(STDIN)));
}

$component = array_fill(0, $n, array_fill(0, $m, -1));
$currentComponent = 0;

function dfs($y, $x, $id, $color) {
    global $n, $m, $grid, $component;
    $stack = [[$x, $y]];
    $directions = [[1, 0], [0, 1], [-1, 0], [0, -1]];

    while (!empty($stack)) {
        list($cx, $cy) = array_pop($stack);
        foreach ($directions as $dir) {
            $nx = $cx + $dir[0];
            $ny = $cy + $dir[1];
            if ($nx >= 0 && $nx < $m && $ny >= 0 && $ny < $n && $component[$ny][$nx] === -1 && $grid[$ny][$nx] === $color) {
                $component[$ny][$nx] = $id;
                $stack[] = [$nx, $ny];
            }
        }
    }
}

// Assign components
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        if ($component[$i][$j] === -1) {
            $component[$i][$j] = $currentComponent;
            dfs($i, $j, $currentComponent, $grid[$i][$j]);
            $currentComponent++;
        }
    }
}

// Process queries
for ($query = 0; $query < $k; $query++) {
    list($a, $b, $c, $d) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $a--; $b--; $c--; $d--;
    if ($component[$a][$b] == $component[$c][$d]) {
        echo "Yes\n";
    } else {
        echo "No\n";
    }
}
