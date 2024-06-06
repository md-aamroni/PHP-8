<?php

/**
 * Definition and Usage:
 *    The array_pop() function deletes the last element of an array.
 *
 *
 * Syntax:
 *    array_pop(array)
 *
 *    array - Required. Specifies an array
 *
 */

// Example 1:
$fruits = array('Apple', 'Banana', 'Mango', 'Lemon', 'Orange');
$result = array_pop($fruits);

print_r($result);
echo '<pre>';
print_r($fruits);
echo '</pre>';

/**
 * The output of the code above will be:
 * Orange
 *
 * Array
 * (
 *    [0] => Apple
 *    [1] => Banana
 *    [2] => Mango
 *    [3] => Lemon
 * )
 *
 */