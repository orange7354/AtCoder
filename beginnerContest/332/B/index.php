<?php
fscanf(STDIN, '%d %d %d', $K , $G ,$M);

$result_G = 0;
$result_M = 0;

for($i = 0; $i < $K; $i++) {
    if( $G == $result_G ){
        $result_G = 0;
    } elseif( $result_M == 0){
        $result_M = $M;
    } else {
        while($result_M > 0 && $result_G < $G){
            $result_M -= 1;
            $result_G += 1;
        }
    }
}

echo $result_G.' '.$result_M.PHP_EOL;
