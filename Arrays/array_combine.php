<?php

/**
 * Definition and Usage:
 *    The array_combine() function creates an array by using
 * the elements from one "keys" array and one "values" array.
 *
 *
 * Syntax:
 *    array_combine(keys, values)
 *
 *    keys   - Required. Array of keys
 *    values - Required. Array of values
 *
 */

// Example 1:
$users = ['Peter', 'Smith', 'John'];
$ages  = [35, 42, 29];

$combine = array_combine($ages, $users);

echo '<pre>';
print_r($combine);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array 
 * (
 *    [Peter] => 35 
 *    [Smith] => 42 
 *    [John] => 29
 * )
 */
