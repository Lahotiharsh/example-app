<?php
// Number of rows in the inverted triangle
$rows = 5;

// Outer loop for number of rows
for ($i = $rows; $i >= 1; $i--) {
    // Inner loop for printing stars
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    // Move to the next line after each row
    echo "\n";
}
?>

