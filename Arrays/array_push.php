<?php

/**
 * Definition and Usage:
 *    The array_pop() function deletes the last element of an array.
 *
 *
 * Syntax:
 *    array_push(array, value1, value2, ...)
 *
 *    array  - Required. Specifies an array
 *    value1 - Optional. Specifies the value to add
 *    value2 - Optional. Specifies the value to add
 *
 */

// Example 1:
$fruits = array('Apple', 'Banana', 'Mango', 'Lemon');
array_push($fruits, 'Orange', 'Strawberrry');

echo '<pre>';
print_r($fruits);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [0] => Apple
 *    [1] => Banana
 *    [2] => Mango
 *    [3] => Lemon
 *    [4] => Orange
 * )
 *
 */