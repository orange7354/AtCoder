<?php
// function int_to_array(){ return array_map('intval',explode(' ', trim(fgets(STDIN))));}
// function str_to_int_array(){ return array_map('intval',str_split(trim(fgets(STDIN))));}

$str = trim(fgets(STDIN));
function str_check($str){
    $length = strlen($str);
    if(strlen($str) < 3){
        return false;
    }
    
    if($str[0] != '<' || $str[$length-1] != '>'){
        return false;
    }
    
    for($i = 1; $i < $length-1; $i++){
        if($str[$i] != '='){
            return false;
        }
    }
    return true;
}

echo str_check($str) ? 'Yes' : 'No';