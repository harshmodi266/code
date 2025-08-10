<?php
$num = 5; // number to find factorial
$fact = 1;

for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}

echo "Factorial of $num is: $fact";
?>