<?php

/**
 * Definition and Usage:
 *    The range() function creates an array
 * containing a range of elements.
 *
 *
 * Syntax:
 *    range(low, high, step)
 *
 *    low  - Required. Specifies the lowest value of the array
 *    high - Required. Specifies the highest value of the array
 *    step - Optional. Specifies the increment used in the range. Default is 1
 *
 */

// Example 1:
$numbers = range(1, 5);

echo '<pre>';
print_r($numbers);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [0] => 1
 *    [1] => 2
 *    [2] => 3
 *    [3] => 4
 *    [4] => 5
 * )
 *
 */