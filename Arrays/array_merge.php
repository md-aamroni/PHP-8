<?php

/**
 * Definition and Usage:
 *    The array_merge() function merges one or more
 * arrays into one array.
 *
 *
 * Note:
 *    If you assign only one array to the array_merge() function,
 * and the keys are integers, the function returns a new array with
 * integer keys starting at 0 and increases by 1 for each value.
 *
 *
 * Syntax:
 *    array_merge(array1, array2, array3, ...)
 *
 *    array1 - Required. Specifies an array
 *    array2 - Required. Specifies an array
 *    array3 - Required. Specifies an array
 *
 */

// Example 1:
$array1 = array('Apple', 'Banana');
$array2 = array('Mango', 'Lemon', 'Orange');
$array3 = array('Strawberry', 'Blackberry');
$result = array_merge($array1, $array2, $array3);

echo '<pre>';
print_r($result);
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
 */



/**
 * Definition and Usage:
 *    The array_merge_recursive() function merges one or
 * more arrays into one array.
 *
 *
 * Syntax:
 *    array_merge(array1, array2, array3, ...)
 *
 *    array1 - Required. Specifies an array
 *    array2 - Required. Specifies an array
 *    array3 - Required. Specifies an array
 *
 */

// Example 1:
$array1 = array('a' => 'Apple', 'b' => 'Banana');
$array2 = array('a' => 'Mango', 'b' => 'Lemon', 'c' => 'Orange');
$result = array_merge_recursive($array1, $array2);

echo '<pre>';
print_r($result);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [a] => Array
 *       (
 *          [0] => Apple
 *          [1] => Mango
 *       )
 *    [b] => Array
 *       (
 *          [0] => Banana
 *          [1] => Lemon
 *       )
 *    [c] => Orange
 * )
 */