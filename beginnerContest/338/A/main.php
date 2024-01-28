<?php
// fscanf(STDIN, "%d", $n);
$a = trim(fgets(STDIN));
$a = str_split($a);
$res = false;
foreach ($a as $key => $value) {
    if( $key == 0 && ctype_upper($value)){
        $res = true;
        continue;
    }

    if( $key > 0 ){
        if( ctype_upper($value) ){
            $res = false;
            break;
        }
    }
}

echo $res ? 'Yes' : 'No';