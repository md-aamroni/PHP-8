<?php

/**
 * Definition and Usage:
 *    Operators are used to perform operations on variables and values.
 *
 * Operator Types:
 *    1. Arithmetic operators
 *    2. Assignment operators
 *    3. Comparison operators
 *    4. Increment/Decrement operators
 *    5. Logical operators
 *    6. String operators
 *    7. Array operators
 *    8. Conditional assignment operators
 *
 */

$x = 10;
$y = 10;

// Example 01: Arithmetic operators
$result = $x + $y; // Addition
$result = $x - $y; // Subtraction
$result = $x * $y; // Multiplication
$result = $x / $y; // Division
$result = $x % $y; // Modulus
$result = $x ** 3; // Exponentiation


// Example 02: Assignment operators
$x = $y;       // The left operand gets set to the value of the expression on the right
$x = $x + $y;  // Addition
$x = $x - $y;  // Subtraction
$x = $x * $y;  // Multiplication
$x = $x / $y;  // Division
$x = $x % $y;  // Modulus


// Example 03: Comparison operators
$x == $y;   // (Equal)
$x === $y;  // (Identical)
$x != $y;   // (Not equal)
$x != $y;   // (Not equal)
$x !== $y;  // (Not identical)
$x > $y;    // (Greater than)
$x < $y;    // (Less than)
$x >= $y;   // (Greater than or equal to)
$x <= $y;   // (Less than or equal to)
$x <=> $y;  // (Spaceship)


// Example 04: Increment/Decrement operators
++$x; // Pre-increment
$x++; // Post-increment
--$x; // Pre-decrement
$x--; // Post-decrement


// Example 05: Logical operators
$x and $y;  // (And) True if both $x and $y are true
$x && $y;   // (And) True if both $x and $y are true
$x or $y;   // (Or) True if either $x or $y is true
$x || $y;   // (Or) True if either $x or $y is true
$x xor $y;  // (Xor) True if either $x or $y is true, but not both
!$x;        // (Not) True if $x is not true


// Example 06: String operators
$userName = 'John'; // Concatenation
$userName .= ' Doe'; // Concatenation assignment


// Example 07: Array operators
$x + $y;    // (Union) Union of $x and $y
$x == $y;   // (Equality) Returns true if $x and $y have the same key/value pairs
$x === $y;  // (Identity) Returns true if $x and $y have the same key/value pairs in the same order and of the same types
$x != $y;   // (Inequality) Returns true if $x is not equal to $y
$x != $y;   // (Inequality) Returns true if $x is not equal to $y
$x !== $y;  // (Non-identity) Returns true if $x is not identical to $y


// Example 08: Conditional Assignment operators
$result = $x ? $x : $y; // (Ternary)
$result = $x ?? $x;     // (Null coalescing)