<?php

/**
 * Definition and Usage:
 *    The array_count_values() function counts all the values of an array.
 *
 *
 * Syntax:
 *    array_count_values(array)
 *
 */

// Example 1:
$fruits = ['Apple', 'Mango', 'Banana', 'Lemon', 'Apple', 'Orange', 'Strawberry', 'Mango', 'Apple'];

echo '<pre>';
print_r(array_count_values($fruits));
echo '</pre>';

/**
 * The output of the code above will be:
 * Array 
 * (
 *    [Apple] => 2 
 *    [Mango] => 2 
 *    [Banana] => 1 
 *    [Lemon] => 1 
 *    [Orange] => 1 
 *    [Strawberry] => 1
 * )
 */