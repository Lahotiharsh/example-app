<?php
// Practical.php

class Practical {
    // Function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!";
    }

    // Function to add two numbers and return the sum
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Function to generate a Fibonacci sequence of 'n' integers
    public static function generateFibonacciSequence($n) {
        $fibSequence = [];

        $first = 0;
        $second = 1;

        for ($i = 0; $i < $n; $i++) {
            $fibSequence[] = $first;
            $next = $first + $second;
            $first = $second;
            $second = $next;
        }

        return $fibSequence;
    }
}
?>

