<?php
// PHP program to print an inverted triangle pattern

// Function to print an inverted triangle pattern with a specified number of rows
function printInvertedTriangle($rowCount) {
    // Outer loop for each row
    for ($row = $rowCount; $row >= 1; $row--) {
        // Inner loop for each column in the current row
        for ($column = 1; $column <= $row; $column++) {
            // Print a star for each column
            echo "*";
        }
        // Move to the next line after each row
        echo "\n";
    }
}

// Number of rows in the inverted triangle pattern
$invertedTriangleRows = 5;

// Call the function to print the inverted triangle pattern
printInvertedTriangle($invertedTriangleRows);
?>

