<?php
fscanf(STDIN,"%d",$N);
$arr = explode(' ',trim(fgets(STDIN)));
$tmp = array_sum($arr);

echo (0 - $tmp).PHP_EOL;