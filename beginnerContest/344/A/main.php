<?php
$str = explode('|', trim(fgets(STDIN)));

echo trim($str[0].$str[2]).PHP_EOL;