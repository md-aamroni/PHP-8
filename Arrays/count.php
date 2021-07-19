<?php

/**
 * Definition and Usage:
 *    The count() function returns the number of elements in an array.
 *
 *
 * Syntax:
 *    count(array, mode)
 *
 *    array - Required. Specifies the array
 *    mode  - Optional. Specifies the mode. Possible values:
 *
 *            1) 0 - Default. Does not count all elements of multidimensional arrays
 *            2) 1 - Counts the array recursively (counts all the elements of multidimensional arrays)
 *
 */

// Example 1:
$cars = array("Volvo", "BMW", "Toyota", "Rolls Royce");

echo 'Total array length is = ' . count($cars);

/**
 * The output of the code above will be:
 * 
 * Total array length is = 3
 *
 */