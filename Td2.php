<?php
function my_strrev($str) {
    $reversed = '';
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}
echo my_strrev("bonjour"); 
?>
