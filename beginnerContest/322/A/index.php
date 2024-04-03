<?php
fscanf(STDIN,'%d',$N);
$str = trim(fgets(STDIN));
$res = strpos($str,'ABC');
echo $res !== false ? ($res + 1).PHP_EOL : (-1).PHP_EOL;