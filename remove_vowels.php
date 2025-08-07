<?php
function removeVowels($string) {
    return str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '', $string);
}

// Example
echo removeVowels("Hello World"); // Hll Wrld
?>