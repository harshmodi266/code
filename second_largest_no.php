<?php
function findSecondLargest(array $nums) {
    $first = null;
    $second = null;

    foreach ($nums as $n) {
        if ($first === null || $n > $first) {
            $second = $first;
            $first = $n;
        } elseif ($n !== $first && ($second === null || $n > $second)) {
            $second = $n;
        }
    }

    return $second;
}

// Example usage:
$arr = [5, 2, 9, 1, 7, 6, 3];
echo "second largest number is :".findSecondLargest($arr);  // Outputs: 7

?>
