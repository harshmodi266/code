<?php
$number = 15;
if ($number == 0) {
    echo"$number is zero";
}elseif($number % 2 == 0){
    echo"$number is even";
    }else{
        echo "$number is odd";
    }

?>
// Print all even numbers within a specific range
<?php
$start = 1;
$end = 20;
echo "Evan Number Between $start to $end are: ";
for($i = $start; $i <= $end; $i++){
    if($i % 2 == 0){ // if selecter say odd number then chenge logic only if($i % 2 != 0)
        echo $i . " ";
    }
}
?>

