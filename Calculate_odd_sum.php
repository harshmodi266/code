<?php
function sumOddNumbers($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num % 2 != 0) {
            $sum += $num;
        }
    }
    return $sum;
}

// Example
$numbers = [1, 2, 3, 4, 5];
echo sumOddNumbers($numbers); // Output: 9 (1 + 3 + 5)
?>
