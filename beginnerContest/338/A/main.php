<?php
// fscanf(STDIN, "%d", $n);
$s = trim(fgets(STDIN));

// $s = str_split($s);
// $res = false;
// foreach ($s as $key => $value) {
//     if( $key == 0 && ctype_upper($value)){
//         $res = true;
//         continue;
//     }

//     if( $key > 0 ){
//         if( ctype_upper($value) ){
//             $res = false;
//             break;
//         }
//     }
// }

// echo $res ? 'Yes' : 'No';

//他のパターン
//strtolower()で小文字に変換
//ucfirst()で先頭文字を大文字に変換
$formatted = ucfirst(strtolower($s));


if ($s === $formatted) {
    echo "Yes";
} else {
    echo "No";
}