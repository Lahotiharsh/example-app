<?php
// PHP program to swap two numbers

// Define variables to store the numbers
$firstNumber = 5;
$secondNumber = 10;

// Print original numbers
echo "Before swapping: First Number: " . $firstNumber . ", Second Number: " . $secondNumber . "<br>";

// Swap the numbers using a temporary variable
$temporaryNumber = $firstNumber;
$firstNumber = $secondNumber;
$secondNumber = $temporaryNumber;

// Print swapped numbers
echo "After swapping: First Number: " . $firstNumber . ", Second Number: " . $secondNumber;
?>

