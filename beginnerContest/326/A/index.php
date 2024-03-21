<?php
fscanf(STDIN,'%d %d',$X ,$Y);


if($X < $Y && $Y - $X <= 2){
    echo 'Yes'.PHP_EOL;
} else if( $X > $Y && $X - $Y <= 3){
    echo 'Yes'.PHP_EOL;
} else {
    echo 'No'.PHP_EOL;
}