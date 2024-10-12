<?php

/**
 * Definition and Usage:
 *    The array_flip() function flips/exchanges all keys
 * with their associated values in an array.
 *
 *
 * Syntax:
 *    array_flip(array)
 *
 *    array - Required. Specifies an array of key/value pairs to be flipped
 *
 */

// Example 1:
$array = array(
   "full_name" => "John Doe",
   "email"     => "jhondoe@gmail.com",
   "mobile"    => "+8801316440504",
   "address"   => "Dhaka-1206, Bangladesh",
);

$result = array_flip($array);

echo '<pre>';
print_r($result);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [John Doe] => full_name
 *    [jhondoe@gmail.com] => email
 *    [+8801316440504] => mobile
 *    [Dhaka-1206, Bangladesh] => address
 * )
 */
