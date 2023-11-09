<?php
// Function to generate Fibonacci sequence using a loop
function generateFibonacci($n) {
    $fibonacciSequence = array();
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }
    
    return $fibonacciSequence;
}

// Number of Fibonacci numbers to generate
$n = 10;

// Generate Fibonacci sequence
$fibonacciSequence = generateFibonacci($n);

// Output the Fibonacci sequence
echo "Fibonacci Sequence (using loop): " . implode(", ", $fibonacciSequence);
?>

