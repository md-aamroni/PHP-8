<?php

/**
 * Definition and Usage:
 *    The array_reverse() function returns an array in the reverse order.
 *
 *
 * Syntax:
 *    array_reverse(array, preserve)
 *
 *    array    - Required. Specifies an array
 *    preserve - Optional. Specifies if the function should preserve the keys of the array or not
 *
 *               1. true
 *               2. false
 *
 */

// Example 1:
$fruits = array('Apple', 'Banana', 'Mango', 'Lemon', 'Orange');
$result = array_reverse($fruits);

echo '<pre>';
print_r($result);
echo '</pre>';

/**
 * The output of the code above will be:
 *
 * Array
 * (
 *    [0] => Orange
 *    [1] => Lemon
 *    [2] => Mango
 *    [3] => Banana
 *    [4] => Apple
 * )
 *
 */