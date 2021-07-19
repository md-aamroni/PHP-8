<?php

/**
 * Definition and Usage:
 *    The shuffle() function randomizes the order of the
 * elements in the array. This function assigns new keys for
 * the elements in the array. Existing keys will be removed.
 *
 *
 * Syntax:
 *    shuffle(array)
 *
 *    array - Required. Specifies the array to use
 *
 */

// Example 1:
$users = array("red", "green", "blue", "yellow", "purple");
shuffle($users);

echo '<pre>';
print_r($users);
echo '</pre>';

/**
 * The output of the code above will be:
 *
 * Array
 * (
 *    [0] => yellow
 *    [1] => purple
 *    [2] => red
 *    [3] => blue
 *    [4] => green
 * )
 *
 * n:b: your output might be changed..
 *
 */