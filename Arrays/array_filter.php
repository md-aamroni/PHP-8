<?php

/**
 * Definition and Usage:
 *    The array_filter() function filters the values
 * of an array using a callback function.
 *
 *
 * Syntax:
 *    array_filter(array, callbackfunction, flag)
 *
 *    array             - Required. Specifies the array to filter
 *    callbackfunction  - Optional. Specifies the callback function to use
 *    flag              - Optional. Specifies what arguments are sent to callback:
 *
 *                         ARRAY_FILTER_USE_KEY - pass key as the only argument to callback (instead of the value)
 *                         ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback (instead of the value)
 *
 */

// Example 1:
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$oddNum = array_filter($number,
   function ($num) {
      if ($num % 2 == 1) {
         return $num;
      }
   }
);

$evenNum = array_filter($number,
   function ($num) {
      if ($num % 2 === 0) {
         return $num;
      }
   }
);


echo '<pre>';
print_r($oddNum);
print_r($evenNum);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [1] => 2
 *    [3] => 4
 *    [5] => 6
 *    [7] => 8
 * )
 *
 * Array
 * (
 *    [0] => 1
 *    [2] => 3
 *    [4] => 5
 *    [6] => 7
 *    [8] => 9
 * )
 */