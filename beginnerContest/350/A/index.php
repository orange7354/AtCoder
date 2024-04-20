<?php
// $arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$str = trim(fgets(STDIN));
$max = 349;
$min = 1;
$ignore = 316;
$target = $str[3].$str[4].$str[5];
for($i = $min ; $i <= $max ; $i++){
    if($i == $ignore){
        continue;
    }
    if($i == intval($target)){
        echo "Yes".PHP_EOL;
        exit;
    }
}

echo "No".PHP_EOL;