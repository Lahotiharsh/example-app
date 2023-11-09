<?php
// PHP program to calculate factorial of a number

// Function to calculate factorial of a number
function calculateFactorial($number) {
    // Base case: factorial of 0 or 1 is 1
    if ($number <= 1) {
        return 1;
    } else {
        // Recursive call to calculate factorial
        return $number * calculateFactorial($number - 1);
    }
}

// Number for which factorial needs to be calculated
$factorialNumber = 5;

// Call the function to calculate factorial
$factorialResult = calculateFactorial($factorialNumber);

// Print the calculated factorial
echo "Factorial of $factorialNumber is: " . $factorialResult;
?>

