<?php
function LeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "$year is a leap year";
    } else {
        return "$year is not a leap year";
    }
}

$year = 2024;
echo LeapYear($year); // Outputs: 2024 is a leap year
?>