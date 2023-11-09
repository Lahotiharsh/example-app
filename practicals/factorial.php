<?php
// Function to calculate factorial using a loop
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

// Number for which factorial needs to be calculated
$number = 5;

// Calculate and output the factorial
echo "Factorial of $number is: " . factorial($number);
?>

