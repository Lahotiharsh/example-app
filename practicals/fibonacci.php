<?php
// PHP program to generate Fibonacci sequence

// Function to generate Fibonacci sequence up to a given count
function generateFibonacci($count) {
    // Initialize an array to store Fibonacci numbers
    $fibonacciSequence = [0, 1];

    // Generate Fibonacci sequence using a loop
    for ($i = 2; $i < $count; $i++) {
        // Calculate the next Fibonacci number and add it to the array
        $nextFibonacci = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        $fibonacciSequence[] = $nextFibonacci;
    }

    // Return the generated Fibonacci sequence
    return $fibonacciSequence;
}

// Number of Fibonacci numbers to generate
$fibonacciCount = 10;

// Call the function to generate Fibonacci sequence
$fibonacciResult = generateFibonacci($fibonacciCount);

// Print the generated Fibonacci sequence
echo "Fibonacci Sequence: " . implode(", ", $fibonacciResult);
?>

