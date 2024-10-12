<?php

/**
 * Definition and Usage:
 *    The sizeof() function returns the number of elements in an array.
 *
 *
 * Syntax:
 *    sizeof(array, mode)
 *
 *    array - Required. Specifies the array
 *    mode  - Optional. Specifies the mode. Possible values:
 *
 *            1) 0 - Default. Does not count all elements of multidimensional arrays
 *            2) 1 - Counts the array recursively (counts all the elements of multidimensional arrays)
 */

// Example 1:
$cars = array("Volvo", "BMW", "Toyota");

echo 'Total array length is = ' . sizeof($cars);

/**
 * The output of the code above will be:
 *
 * Total array length is = 3
 */