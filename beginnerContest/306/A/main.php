<?php
fscanf(STDIN, "%s\n", $N);

$str = trim(fgets(STDIN));
$arr = str_split($str);
$tt = '';
foreach($arr as $v){
    $tt .= $v.$v;
}
echo $tt.PHP_EOL;