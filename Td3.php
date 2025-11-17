<?php
function my_str_contains($haystack, $needle) {
    $haystackLength = strlen($haystack);
    $needleLength = strlen($needle);
    if ($needleLength === 0) {
        return true;
    }
    if ($needleLength > $haystackLength) {
        return false;
    }
    for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
        $match = true;
    
        for ($j = 0; $j < $needleLength; $j++) {
            if ($haystack[$i + $j] !== $needle[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            return true;
        }
    }

    return false;
}
var_dump(my_str_contains("Bonjour le monde", "monde")); 
var_dump(my_str_contains("Bonjour le monde", "terre")); 
var_dump(my_str_contains("Bonjour", "")); 
?>
