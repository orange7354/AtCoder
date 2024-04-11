<?php
// url : https://paiza.jp/works/mondai/bfs_dfs_problems_advanced/bfs_dfs_problems_advanced__animation
// 標準入力からのデータを受け取る
list($n, $m, $x, $y, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$x--; $y--; // 0ベースのインデックスに変換

$map = [];
for ($i = 0; $i < $n; $i++) {
    $map[] = str_split(trim(fgets(STDIN)));
}

// 各マスの距離初期化。-1 は未到達を意味する
$dist = array_fill(0, $n, array_fill(0, $m, -1));
$dist[$x][$y] = 0; // 開始位置

$queue = new SplQueue();
$queue->enqueue([$x, $y]);

$dx = [1, 0, -1, 0];
$dy = [0, 1, 0, -1];

// BFSで水の拡散シミュレーション
while (!$queue->isEmpty()) {
    [$cx, $cy] = $queue->dequeue();

    for ($i = 0; $i < 4; $i++) {
        $nx = $cx + $dx[$i];
        $ny = $cy + $dy[$i];

        if ($nx < 0 || $nx >= $n || $ny < 0 || $ny >= $m) continue; // グリッド外
        if ($map[$nx][$ny] == '#' || $dist[$nx][$ny] != -1) continue; // 壁または既に訪問済み

        $dist[$nx][$ny] = $dist[$cx][$cy] + 1;
        $queue->enqueue([$nx, $ny]);
    }
}

// 各ステップごとの状態を出力
for ($t = 0; $t < $k; $t++) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if ($dist[$i][$j] == $t) {
                $map[$i][$j] = '+';
            }
        }
        echo implode('', $map[$i]) . PHP_EOL;
    }
    echo PHP_EOL; // ステップ間に空行
}

?>
