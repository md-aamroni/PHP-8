<?php

/**
 * Definition and Usage:
 *    The array_fill() function fills an array with values.
 *
 *
 * Syntax:
 *    array_fill(index, number, value)
 * 
 *    index  - Required. The first index of the returned array
 *    number - Required. Specifies the number of elements to insert
 *    value  - Required. Specifies the value to use for filling the array
 *
 */

// Example 1:
$result = array_fill(1, 3, "blue");

echo '<pre>';
print_r($result);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array 
 * (
 *    [2] => blue 
 *    [3] => blue 
 *    [4] => blue 
 *    [5] => blue
 * )
 */