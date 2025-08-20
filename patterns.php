<!-- right -->
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "<br>";
}
?>

<!-- Inverted Star Triangle -->
<?php
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "<br>";
}
?>

<!-- Right-Aligned Star Pattern -->
 <?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // print spaces first
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;&nbsp;";  
    }
    // then print stars
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>

<!-- Inverted Right-Aligned Star Pattern -->
<?php
$rows = 5;

for ($i = $rows; $i >= 1; $i--) {
    // print spaces
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // print stars
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>

<!-- Pyramid Pattern -->
<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    // spaces
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

<!-- invered full star pattern  -->
<?php
$rows = 5;

for ($i = $rows; $i >= 1; $i--) {
    // print spaces
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;&nbsp;"; // double space for alignment
    }
    // print stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
