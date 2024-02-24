<?php
fscanf(STDIN, '%d', $n);
$S = trim(fgets(STDIN));
fscanf(STDIN, '%d', $q);

$replacements = [];
for ($i = 0; $i < $q; $i++) {
    [$from, $to] = explode(' ', trim(fgets(STDIN)));
    // 直接の置換を記録
    $replacements[$from] = $to;
}

// 最終的な置換を計算する
$finalReplacements = [];
foreach ($replacements as $from => $to) {
    $current = $to;
    $seen = [$from => true]; // 現在の置換から始まるチェーンを追跡

    // 最終的な置換先を探す
    while (isset($replacements[$current])) {
        if (isset($seen[$current])) {
            // 循環参照が検出された場合、このチェーンの処理を終了
            break;
        }
        $seen[$current] = true; // 現在の要素を見たと記録
        $current = $replacements[$current];
    }
    $finalReplacements[$from] = $current;
}
// 文字列Sを一度だけ走査して置換
$result = '';
for ($i = 0; $i < strlen($S); $i++) {
    $char = $S[$i];
    // 最終的な置換が存在する場合のみ置換
    if (isset($finalReplacements[$char])) {
        $char = $finalReplacements[$char];
    }
    $result .= $char;
}

echo $result.PHP_EOL;