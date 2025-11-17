<?php
function my_strrev($nombres) {
    $somme = array_sum($nombres);
    $moyenne = $somme / count($nombres);
    return $moyenne;
}  
    $tableau = [10, 15, 20, 25];
echo my_strrev($tableau); 
?>
