<?php
$number = 13; // You can change this number

if ($number < 2) {
    echo "$number is not a prime number";
} else {
    $isPrime = true;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "$number is a prime number";
    } else {
        echo "$number is not a prime number";
    }
}
?>