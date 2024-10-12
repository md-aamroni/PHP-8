<?php

/**
 * Definition and Usage:
 *    The array_keys() function returns an array containing the keys.
 *
 *
 * Syntax:
 *    array_keys(array, value, strict)
 *
 *    array  - Required. Specifies an array
 *    value  - Optional. You can specify a value, then only the keys with this value are returned
 *    strict - Optional. Used with the value parameter. Possible values
 *
 */

// Example 1:
$array = array(
   "Volvo"  => "XC90",
   "BMW"    => "X5",
   "Toyota" => "Highlander",
);

echo '<pre>';
print_r(array_keys($array));
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [0] => Volvo
 *    [1] => BMW
 *    [2] => Toyota
 * )
 */
