<?php
fscanf(STDIN,'%s',$L);

$match = 2023;

$idx = strrpos($L,$match);

$aa = substr($L,0,$idx);
echo $aa. '2024' . PHP_EOL;