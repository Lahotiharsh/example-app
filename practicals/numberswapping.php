<?php
// PHP program to swap two numbers

// Function to swap two numbers using a temporary variable
function swapNumbers(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

// Example usage
$num1 = 5;
$num2 = 10;

echo "Before swapping: ";
echo "Number 1: " . $num1 . " ";
echo "Number 2: " . $num2 . " ";

// Call the function to swap numbers
swapNumbers($num1, $num2);

echo "After swapping: ";
echo "Number 1: " . $num1 . " ";
echo "Number 2: " . $num2 . " ";
?>

