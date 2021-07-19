<?php

/**
 * Definition and Usage:
 *    The array_map() function sends each value of an array
 * to a user-made function, and returns an array with new
 * values, given by the user-made function.
 *
 *
 * Syntax:
 *    array_map(myFunction, array1, array2, array3, ...)
 *
 *    myFunction - Required. The name of the user-made function, or null
 *    array1 - Required. Specifies an array
 *    array2 - Required. Specifies an array
 *    array3 - Required. Specifies an array
 *
 */

// Example 1:
function addition($arr) {
   return $arr + 2;
}

function isMatched($arr1, $arr2) {
   if ($arr1 === $arr2) {
      return 'Matched';
   } else {
      return 'Not matched';
   }
}

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(1, 3, 2, 4, 8);

$example1 = array_map('addition', $array1);
$example2 = array_map('isMatched', $array1, $array2);

echo '<pre>';
print_r($example1);
print_r($example2);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [0] => 6
 *    [1] => 7
 *    [2] => 8
 *    [3] => 9
 *    [4] => 10
 * )
 *
 * Array
 * (
 *    [0] => Matched
 *    [1] => Not matched
 *    [2] => Not matched
 *    [3] => Matched
 *    [4] => Not matched
 * )
 */
