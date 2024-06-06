<?php

/**
 * Definition and Usage:
 *    The array_slice() function returns selected parts of an array.
 *
 *
 * Note:
 *    If the array have string keys, the returned array will always preserve the keys
 *
 *
 * Syntax:
 *    array_slice(array, start, length, preserve)
 *
 *    array    - Required. Specifies an array
 *    start    - Required. Required. Numeric value, specifies where the function will start the slice
 *    length   - Optional. Numeric value, specifies the length of the returned array
 *    preserve - Optional. Specifies if the function should preserve or reset the keys. Possible values:
 *
 *               1. true   - Preserve keys
 *               2. false  - Default. Reset keys
 *
 */

// Example 1:
$fruits = array('Apple', 'Banana', 'Mango', 'Lemon', 'Orange');
$result = array_slice($fruits, 1, 3);

echo '<pre>';
print_r($result);
echo '</pre>';

/**
 * The output of the code above will be:
 *
 * Array
 * (
 *    [0] => Banana
 *    [1] => Mango
 *    [2] => Lemon
 * )
 *
 */